@props([
    'variant' => 'outlined',
    'size' => 'default',
    'activeTab' => null // the chosen one, if no x-model or wire:model is bound
])

@php
$classes = match($variant){
    'outlined' => [
        'dark:text-neutral-200 text-neutral-800 rounded-3xl',    
        // When tabs are left-aligned (justify-start), remove top-left rounding on active tab panels
        '[&:has(:first-child[data-slot=tabs-group].justify-start_>_:first-child[data-active=true])_[data-slot=tabs-panel]]:rounded-tl-none',
        // Also remove top-left rounding on tab panels when the first tab is focused or hovered
        '[&:has(:first-child[data-slot=tabs-group].justify-start_>_:first-child:is(:focus,:hover))_[data-slot=tabs-panel]]:rounded-tl-none',
        // When tabs are right-aligned (justify-end), remove top-right rounding on active tab panels
        '[&:has(:first-child[data-slot=tabs-group].justify-end_>_:last-child[data-active=true])_[data-slot=tabs-panel]]:rounded-tr-none',
        // Also remove top-right rounding on tab panels when the last tab is focused or hovered
        '[&:has(:first-child[data-slot=tabs-group].justify-end_>_:last-child:is(:focus,:hover))_[data-slot=tabs-panel]]:rounded-tr-none',
    ],
    'non-contained' => [],
    default => []
};

@endphp
<div 
    {{ $attributes->class(Arr::toCssClasses($classes)) }}
    x-data="{
        state: null, // hold the activeTab identier
        // Behold: we collect raw info about tabs and panels here.
        // Why? Because we need to bend them to our will later.
        tabs: [],
        panels: [],
        
        init() {
             // Okay, here's the deal.
            // If someone wires in x-model or wire:model, we obey it. // el._x_model hold the value of either of them.
            // If not, we fall back to the good  PHP-provided $activeTab.
            // If that also fails, we just wing it after setup.
            queueMicrotask(() =>{
                this.state = this.$el._x_model?.get() ?? @js($activeTab);
                this.collectTabsAndPanels();
                this.initializeActiveTab();
            })

            // Begin the ritual: summon all tabs and panels
        },
        
        collectTabsAndPanels() {
            const tabElements = this.$el.querySelectorAll('[data-slot=tab]');
            this.tabs = Array.from(tabElements).map((tab, index) => { 
                tab.setAttribute('data-tab-order', index )
                return { 
                    element: tab,
                    name: tab.dataset?.name,
                    index: index 
                }
            });
            
            const panelElements = this.$el.querySelectorAll('[data-slot=tabs-panel]');
            this.panels = Array.from(panelElements).map((panel, index) => {
                panel.setAttribute('data-panel-order', index )
                return {
                    element: panel,
                    name: panel.dataset?.name,
                    index: index 
                }
            });
        },
        
        initializeActiveTab() {
            // check if already the active tab was setted in the start
            if (this.state) {
                this.setActiveTab(this.state);
            } else if (this.tabs.length > 0) {
                const firstTab = this.tabs[0];
                this.setActiveTab(firstTab.name ?? firstTab.index);   
            }
        },
        
        setActiveTab(tabIdentifier) {
            this.state = tabIdentifier;
            
            // Update tabs
            this.tabs.forEach(tab => {
                const isActive = this.isActive(tab, tabIdentifier);
                tab.element.setAttribute('data-active', isActive);
            });
            
            // Update panels
            this.panels.forEach(panel => {
                const isActive = this.isActive(panel, tabIdentifier);
                panel.element.style.display = isActive ? 'block' : 'none';
            });
        },

        isActive(item, identifier = this.state) {
            return item.name != null 
                ? item.name === identifier
                : Number(item.index) === Number(identifier);
        },

        handleTabClick(el) {
            const tab = el;
            const tabName = tab.dataset?.name;
            const tabIndex = Number(tab.dataset.tabOrder)
            this.setActiveTab(tabName ?? tabIndex);
        }
    }"
>
    {{ $slot }}
</div>