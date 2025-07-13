---
name: 'tabs'
---

# Tabs Component

## Introduction

The `tabs` component provides a flexible and accessible tabbed interface for organizing content. It supports both named and indexed tabs, Livewire binding, x-model integration, keyboard navigation, and automatic tab management. Perfect for organizing related content sections, settings panels, or any multi-section interface.

## Basic Usage

@blade
<x-demo>
    <x-ui.tabs>
        <x-ui.tab.group>
            <x-ui.tab name="users" label="Tab 1" />
            <x-ui.tab name="dashboard" label="Tab 2" />
            <x-ui.tab name="settings" label="Tab 3" />
        </x-ui.tab.group>
        <x-ui.tab.panel name="users">
            <h3 class="text-lg font-semibold mb-2">Tab 1 Content</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="dashboard">
            <h3 class="text-lg font-semibold mb-2">Tab 2 Content</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="settings">
            <h3 class="text-lg font-semibold mb-2">Tab 3 Content</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit ut labore.</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs>
    <x-ui.tab.group>
        <x-ui.tab label="Tab 1" />
        <x-ui.tab label="Tab 2" />
        <x-ui.tab label="Tab 3" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel name="users">
        <h3 class="text-lg font-semibold mb-2">Tab 1 Content</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </x-ui.tab.panel>
    
    <x-ui.tab.panel name="users">
        <h3 class="text-lg font-semibold mb-2">Tab 2 Content</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
    </x-ui.tab.panel>
    
    <x-ui.tab.panel name="users">
        <h3 class="text-lg font-semibold mb-2">Tab 3 Content</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit ut labore.</p>
    </x-ui.tab.panel>
</x-ui.tabs>
```

## Livewire Integration

### Bind To Livewire

Use `wire:model` to bind the active tab to a Livewire property:

@blade
<x-demo>
    <x-ui.tabs wire:model="activeTab">
        <x-ui.tab.group>
            <x-ui.tab label="Dashboard" name="dashboard" />
            <x-ui.tab label="Settings" name="settings" />
            <x-ui.tab label="Profile" name="profile" />
        </x-ui.tab.group>
        <x-ui.tab.panel name="users" name="dashboard">
            <h3 class="text-lg font-semibold mb-2">Dashboard</h3>
            <p>Your dashboard content goes here.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="users" name="settings">
            <h3 class="text-lg font-semibold mb-2">Settings</h3>
            <p>Configure your application settings.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="users" name="profile">
            <h3 class="text-lg font-semibold mb-2">Profile</h3>
            <p>Manage your profile information.</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs wire:model="activeTab">
    <x-ui.tab.group>
        <x-ui.tab label="Dashboard" name="dashboard" />
        <x-ui.tab label="Settings" name="settings" />
        <x-ui.tab label="Profile" name="profile" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel name="users" name="dashboard">...</x-ui.tab.panel>
    <x-ui.tab.panel name="users" name="settings">...</x-ui.tab.panel>
    <x-ui.tab.panel name="users" name="profile">...</x-ui.tab.panel>
</x-ui.tabs>
```
> this is assume you have `activeTab` property onto your livewire class

### Using with Alpine.js

You can use the tabs component with Alpine.js using `x-model`:

@blade
<x-demo>
    <div x-data="{ currentTab: 'tab1' }">
        <x-ui.tabs x-model="currentTab">
            <x-ui.tab.group>
                <x-ui.tab label="Home" name="tab1" />
                <x-ui.tab label="About" name="tab2" />
                <x-ui.tab label="Contact" name="tab3" />
            </x-ui.tab.group>
            <x-ui.tab.panel name="users" name="tab1">
                <h3 class="text-lg font-semibold mb-2">Home</h3>
                <p>Welcome to our homepage content.</p>
            </x-ui.tab.panel>
            <x-ui.tab.panel name="users" name="tab2">
                <h3 class="text-lg font-semibold mb-2">About</h3>
                <p>Learn more about our company and mission.</p>
            </x-ui.tab.panel>
            <x-ui.tab.panel name="users" name="tab3">
                <h3 class="text-lg font-semibold mb-2">Contact</h3>
                <p>Get in touch with us through various channels.</p>
            </x-ui.tab.panel>
        </x-ui.tabs>
    </div>
</x-demo>
@endblade

```html
<div x-data="{ currentTab: 'tab1' }">
    <x-ui.tabs x-model="currentTab">
        <x-ui.tab.group>
            <x-ui.tab label="Home" name="tab1" />
            <x-ui.tab label="About" name="tab2" />
            <x-ui.tab label="Contact" name="tab3" />
        </x-ui.tab.group>
        
        <x-ui.tab.panel name="users" name="tab1">...</x-ui.tab.panel>
        
        <x-ui.tab.panel name="users" name="tab2">...</x-ui.tab.panel>
        
        <x-ui.tab.panel name="users" name="tab3">...</x-ui.tab.panel>
    </x-ui.tabs>
</div>
```

## Tab Management

### Named Tabs

Use the `name` attribute to create identifiable tabs, here order of tab and panels matter:

@blade
<x-demo>
    <x-ui.tabs activeTab="general">
        <x-ui.tab.group>
            <x-ui.tab label="General" name="general" />
            <x-ui.tab label="Security" name="security" />
            <x-ui.tab label="Notifications" name="notifications" />
        </x-ui.tab.group>
        <x-ui.tab.panel name="general">
            <h3 class="text-lg font-semibold mb-2">General Settings</h3>
            <p>Basic configuration options for your account.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="security">
            <h3 class="text-lg font-semibold mb-2">Security Settings</h3>
            <p>Manage your password and security preferences.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel name="notifications">
            <h3 class="text-lg font-semibold mb-2">Notification Settings</h3>
            <p>Control how and when you receive notifications.</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs activeTab="general">
    <x-ui.tab.group>
        <x-ui.tab label="General" name="general" />
        <x-ui.tab label="Security" name="security" />
        <x-ui.tab label="Notifications" name="notifications" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel name="general">...</x-ui.tab.panel>
    
    <x-ui.tab.panel name="security">...</x-ui.tab.panel>
    
    <x-ui.tab.panel name="notifications">...</x-ui.tab.panel>
</x-ui.tabs>
```

### Indexed Tabs

For simpler use cases, you can use numeric indices, here order of tab and panels matter (starting from `0`):

> this is less specifity when using named tabs, so names needs to be edentifiable across panels and tabs  

@blade
<x-demo>
    <x-ui.tabs activeTab="1">
        <x-ui.tab.group>
            <x-ui.tab label="First" />
            <x-ui.tab label="Second" />
            <x-ui.tab label="Third" />
        </x-ui.tab.group>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">First Tab</h3>
            <p>This is the first tab content (index 0).</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Second Tab</h3>
            <p>This is the second tab content (index 1).</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Third Tab</h3>
            <p>This is the third tab content (index 2).</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs activeTab="1">
    <x-ui.tab.group>
        <x-ui.tab label="First" />
        <x-ui.tab label="Second" />
        <x-ui.tab label="Third" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel>
        <h3 class="text-lg font-semibold mb-2">First Tab</h3>
        <p>This is the first tab content (index 0).</p>
    </x-ui.tab.panel>
    
    <x-ui.tab.panel>
        <h3 class="text-lg font-semibold mb-2">Second Tab</h3>
        <p>This is the second tab content (index 1).</p>
    </x-ui.tab.panel>
    
    <x-ui.tab.panel>
        <h3 class="text-lg font-semibold mb-2">Third Tab</h3>
        <p>This is the third tab content (index 2).</p>
    </x-ui.tab.panel>
</x-ui.tabs>
```
### Stateless Tabs
you can also get rid of any `activeTab` prop or any *:model binding, and the first component will activate the first component  

@blade
<x-demo>
    <x-ui.tabs>
        <x-ui.tab.group>
            <x-ui.tab label="First" />
            <x-ui.tab label="Second" />
            <x-ui.tab label="Third" />
        </x-ui.tab.group>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">First Tab</h3>
            <p>This is the first tab content.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Second Tab</h3>
            <p>This is the second tab content.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Third Tab</h3>
            <p>This is the third tab content.</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs>
    <x-ui.tab.group>
        <x-ui.tab label="First" />
        <x-ui.tab label="Second" />
        <x-ui.tab label="Third" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
</x-ui.tabs>
```
### Tabs with Icons

@blade
<x-demo>
    <x-ui.tabs>
        <x-ui.tab.group>
            <x-ui.tab label="user" icon="user" />
            <x-ui.tab label="settings" icon="cog-6-tooth" />
            <x-ui.tab label="clock" icon="clock" />
        </x-ui.tab.group>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">First Tab</h3>
            <p>This is the first tab content.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Second Tab</h3>
            <p>This is the second tab content.</p>
        </x-ui.tab.panel>
        <x-ui.tab.panel>
            <h3 class="text-lg font-semibold mb-2">Third Tab</h3>
            <p>This is the third tab content.</p>
        </x-ui.tab.panel>
    </x-ui.tabs>
</x-demo>
@endblade

```html
<x-ui.tabs>
    <x-ui.tab.group>
         <x-ui.tab label="user" icon="user" />
        <x-ui.tab label="settings" icon="cog-6-tooth" />
        <x-ui.tab label="clock" icon="clock" />
    </x-ui.tab.group>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
    
    <x-ui.tab.panel>...</x-ui.tab.panel>
</x-ui.tabs>
```