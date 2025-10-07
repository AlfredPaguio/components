---
name: Layout Components Overview
---

## Introduction

The layout components in Sheaf UI are designed to work together as a cohesive system for building application layouts. These components—Sidebar, Navlist, Header, and Navbar are interdependent and handle common layout patterns like collapsible navigation, responsive headers, and structured content areas.

While you can technically use these components in isolation with additional configuration, they're optimized to work as a connected system. This approach reduces boilerplate and ensures consistent behavior across your application.


Use the [sheaf artisan command](/docs/guides/cli-installation#content-component-management) to install the  components easily:

```bash
php artisan sheaf:install sidebar header navlist navbar
```


## Layouts Variants

The layout system follows a hierarchical structure, at this point sheaf offer two variants :

### Sidebar Main 

#### Usage

the `sidebar-main` layout variant 

```blade
<x-ui.layout>
    <x-ui.sidebar>
        <!-- all sidebar content -->
        <x-ui.navlist>
            <x-ui.navlist.item />
            <x-ui.navlist.group />
        </x-ui.navlist>
        <!-- .... -->
    </x-ui.sidebar>
    
    <x-ui.layout.main>
        <x-ui.header>
            <x-ui.navbar>
                <x-ui.navbar.item />
            </x-ui.navbar>
        </x-ui.header>
        
        <!-- Your page content -->
    </x-ui.layout.main>
</x-ui.layout>

```
#### Screenshots
@blade
<x-md.image                                                            
    src="/images/demos/light/sidebar-main.png"                                    
    dark-src="/images/demos/dark/sidebar-main.png"                                    
    alt="sidebar main"                                               
    caption="sidebar-main layout overview"                                   
/>
@endblade


@blade
<x-md.cta                                                            
    href="/demos/sidebar"                                    
    label="Try this Layout Variant in Action"                                               
/>
@endblade

### Header Sidebar 

#### Usage

the `header-sidebar` layout variant 

```blade
<x-ui.layout variant="header-sidebar">
    <x-ui.layout.header>
        <!--header contents  -->
    </x-ui.layout.header>
    
    <x-ui.sidebar>
        <!-- all sidebar content -->
        <x-ui.navlist>
            <x-ui.navlist.item .../>
            <x-ui.navlist.group ...>
                <!-- group content -->
            </x-ui.navlist.group>
        </x-ui.navlist>
        <!-- .... -->
    </x-ui.sidebar>

    <x-ui.layout.main>
        <!-- main contents -->
    </x-ui.layout.main>
</x-ui.layout>
```
#### Screenshots
@blade
<x-md.image                                                            
    dark-src="/images/demos/dark/header-sidebar.png"                                    
    src="/images/demos/light/header-sidebar.png"                                    
    alt="sidebar main"                                               
    caption="sidebar-main layout overview"                                   
/>
@endblade


@blade
<x-md.cta                                                            
    href="/demos/sidebar/layout-header-sidebar"                                    
    label="Try this Layout Variant in Action"                                               
/>
@endblade


## Core Components

### Sidebar

The sidebar component provides a collapsible navigation container that adapts to different screen sizes. It handles:

- Collapsible/expandable behavior
- Mobile-responsive overlay
- Scrollable content areas
- Brand/logo placement
- Touch device optimization

Key features:
- Automatic width transitions
- Persistent collapse state
- Tooltip support when collapsed
- Custom scrolling behavior

@blade
<x-md.image                                                            
    dark-src="/images/demos/dark/sidebar.png"                                    
    src="/images/demos/light/sidebar.png"                                    
    alt="sidebar main"                         
    class="md-component"                      
/>
@endblade

@blade
<x-md.cta                                                            
    href="/docs/layouts/sidebar"                                    
    label="Read more About sidebar at it's own docs"                                               
/>
@endblade

### Navlist

The navlist component structures navigation items within the sidebar. It provides:

- Individual navigation items
- Collapsible groups
- Nested navigation support
- Active state management
- Consistent spacing and alignment

Works in conjunction with the sidebar's collapsed state to show/hide labels and manage tooltips.

### Header

The header component sits at the top of the main content area and provides:

- Consistent height and styling
- Flexible content placement
- Support for multiple child components
- Responsive behavior

Typically contains a navbar but can hold any header content like search bars, user menus, or breadcrumbs.

### Navbar

The navbar component provides horizontal navigation within the header:

- Horizontal nav items
- Icon + label combinations
- Active state indicators
- Flexible positioning

Complements the sidebar's vertical navigation with top-level or contextual navigation options.

## Design Principles

**Composition Over Configuration**
Rather than a single monolithic component with dozens of props, the system uses smaller, focused components that compose together.

**Contextual Awareness**
Child components automatically adapt based on parent state (e.g., navlist items hide labels when sidebar is collapsed).

**Progressive Enhancement**
Works without JavaScript for basic functionality, enhanced with Alpine.js for interactive features.

**Accessibility First**
Proper ARIA attributes, keyboard navigation, and screen reader support built-in.

## Common Patterns

### Basic Application Layout

```blade
<x-ui.layout>
    <x-ui.sidebar :collapsable="true">
        <x-slot:brand>
            <x-ui.brand name="App Name" />
        </x-slot:brand>
        
        <x-ui.navlist>
            <x-ui.navlist.item label="Dashboard" icon="home" href="/" />
            <x-ui.navlist.item label="Settings" icon="cog-6-tooth" href="/settings" />
        </x-ui.navlist>
    </x-ui.sidebar>
    
    <x-ui.layout.main>
        <x-ui.header>
            <x-ui.navbar>
                <x-ui.navbar.item label="Home" icon="home" />
            </x-ui.navbar>
        </x-ui.header>
        
        @yield('content')
    </x-ui.layout.main>
</x-ui.layout>
```

### Grouped Navigation

```blade
<x-ui.navlist>
    <x-ui.navlist.item label="Dashboard" icon="home" />
    
    <x-ui.navlist.group label="Content" collapsable>
        <x-ui.navlist.item label="Posts" icon="document-text" />
        <x-ui.navlist.item label="Pages" icon="folder" />
    </x-ui.navlist.group>
</x-ui.navlist>
```

### Bottom-Aligned Items

```blade
<x-ui.navlist>
    <!-- Top items -->
    <x-ui.navlist.item label="Dashboard" icon="home" />
    
    <!-- Spacer pushes remaining items to bottom -->
    <x-ui.sidebar.push />
    
    <!-- Bottom items -->
    <x-ui.navlist.item label="Settings" icon="cog-6-tooth" />
    <x-ui.navlist.item label="Logout" icon="arrow-right-on-rectangle" />
</x-ui.navlist>
```

## Next Steps

Explore each component's individual documentation for detailed API references, props, slots, and advanced usage patterns:

- [Sidebar Component](/docs/layouts/sidebar)
- [Navlist Component](/docs/layouts/navlist)
- [Header Component](/docs/layouts/header)
- [Navbar Component](/docs/layouts/navbar)