---
name: 'dropdown'
---

## Introduction

The `dropdown` component provides a powerful and accessible dropdown menu system with full keyboard navigation, submenus, grouping, and customizable positioning. It features smooth animations, proper focus management, and comprehensive ARIA support. Perfect for actions menus, navigation, settings, and any hierarchical menu structure.

## Basic Usage

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Actions
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item>
                Edit
            </x-ui.dropdown.item>
            <x-ui.dropdown.item>
                Duplicate
            </x-ui.dropdown.item>
            <x-ui.dropdown.item>
                Archive
            </x-ui.dropdown.item>
            <x-ui.dropdown.item variant="danger">
                Delete
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Actions
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item>
            Edit
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item>
            Duplicate
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item>
            Archive
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item variant="danger">
            Delete
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

## Dropdown Items

### Items with Icons

Add visual clarity with icons for better user experience.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Actions with Icons
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="pencil">
                Edit
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="document-duplicate">
                Duplicate
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="archive-box">
                Archive
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="trash" variant="danger">
                Delete
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Actions with Icons
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="pencil">
            Edit
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="document-duplicate">
            Duplicate
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="archive-box">
            Archive
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="trash" variant="danger">
            Delete
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

### Items with Shortcuts

Display keyboard shortcuts for power users.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                File Menu
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
                New File
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
                Open File
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="bookmark" shortcut="⌘S">
                Save
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="document-duplicate" shortcut="⌘D">
                Duplicate
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            File Menu
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
            New File
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
            Open File
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="bookmark" shortcut="⌘S">
            Save
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="document-duplicate" shortcut="⌘D">
            Duplicate
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

### Linked Items

Create navigational items that link to other pages.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Navigation
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item href="/dashboard" icon="home">
                Dashboard
            </x-ui.dropdown.item>
            <x-ui.dropdown.item href="/profile" icon="user">
                Profile
            </x-ui.dropdown.item>
            <x-ui.dropdown.item href="/settings" icon="cog">
                Settings
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Navigation
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item href="/dashboard" icon="home">
            Dashboard
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item href="/profile" icon="user">
            Profile
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item href="/settings" icon="cog">
            Settings
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

### Disabled Items

Temporarily disable certain actions while keeping them visible.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Mixed States
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="pencil">
                Edit
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="document-duplicate">
                Duplicate
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="shield-check" disabled>
                Protected Action
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="trash" variant="danger" disabled>
                Delete (Restricted)
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Mixed States
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="pencil">
            Edit
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="document-duplicate">
            Duplicate
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="shield-check" disabled>
            Protected Action
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="trash" variant="danger" disabled>
            Delete (Restricted)
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

## Separators

Use separators to group related items and create visual hierarchy.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Grouped Actions
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="pencil">
                Edit
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="document-duplicate">
                Duplicate
            </x-ui.dropdown.item>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item icon="eye">
                View Details
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="share">
                Share
            </x-ui.dropdown.item>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item icon="trash" variant="danger">
                Delete
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Grouped Actions
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="pencil">
            Edit
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="document-duplicate">
            Duplicate
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item icon="eye">
            View Details
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="share">
            Share
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item icon="trash" variant="danger">
            Delete
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

## Grouping Items

Use groups to organize related items with optional labels.

@blade
<x-demo >
    <x-ui.dropdown>
        <x-slot:button class="justify-center">
            <x-ui.button variant="outline">
                Grouped Menu
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="user">
                Edit Profile
            </x-ui.dropdown.item>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item shortcut="⌘D">
                Duplicate
            </x-ui.dropdown.item>
            <x-ui.dropdown.group label="Operations">
                <x-ui.dropdown.item icon="archive-box">
                    Archive
                </x-ui.dropdown.item>
                <x-ui.dropdown.item variant="danger" icon="trash">
                    Delete
                </x-ui.dropdown.item>
            </x-ui.dropdown.group>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown>
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Grouped Menu
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="user">
            Edit Profile
        </x-ui.dropdown.item>

        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item shortcut="⌘D">
            Duplicate
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.group label="Operations">
            <x-ui.dropdown.item icon="archive-box">
                Archive
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item variant="danger" icon="trash">
                Delete
            </x-ui.dropdown.item>
        </x-ui.dropdown.group>
    </x-slot:menu>
</x-ui.dropdown>
```

## Positioning

Control where the dropdown appears relative to the trigger button.

@blade
<x-demo>
     <div class="flex gap-4 flex-wrap">
        <x-ui.dropdown position="bottom-center">
            <x-slot:button class="justify-center">
                <x-ui.button variant="outline">
                    Bottom Center
                </x-ui.button>
            </x-slot:button>
            <x-slot:menu>
                <x-ui.dropdown.item>Edit</x-ui.dropdown.item>
                <x-ui.dropdown.item>Copy</x-ui.dropdown.item>
                <x-ui.dropdown.item>Delete</x-ui.dropdown.item>
            </x-slot:menu>
        </x-ui.dropdown>
        <x-ui.dropdown position="bottom-start">
            <x-slot:button>
                <x-ui.button variant="outline">
                    Bottom Start
                </x-ui.button>
            </x-slot:button>
            <x-slot:menu>
                <x-ui.dropdown.item>Edit</x-ui.dropdown.item>
                <x-ui.dropdown.item>Copy</x-ui.dropdown.item>
                <x-ui.dropdown.item>Delete</x-ui.dropdown.item>
            </x-slot:menu>
        </x-ui.dropdown>
        <x-ui.dropdown position="bottom-end">
            <x-slot:button>
                <x-ui.button variant="outline">
                    Bottom End
                </x-ui.button>
            </x-slot:button>
            <x-slot:menu>
                <x-ui.dropdown.item>Edit</x-ui.dropdown.item>
                <x-ui.dropdown.item>Copy</x-ui.dropdown.item>
                <x-ui.dropdown.item>Delete</x-ui.dropdown.item>
            </x-slot:menu>
        </x-ui.dropdown>
    </div>
</x-demo>
@endblade

```html
<x-ui.dropdown position="bottom-center">
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Bottom Center
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item>Edit</x-ui.dropdown.item>
        <x-ui.dropdown.item>Copy</x-ui.dropdown.item>
        <x-ui.dropdown.item>Delete</x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>

<x-ui.dropdown position="bottom-start">
    <x-slot:button class="justify-center">
        <x-ui.button variant="outline">
            Bottom Start
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item>Edit</x-ui.dropdown.item>
        <x-ui.dropdown.item>Copy</x-ui.dropdown.item>
        <x-ui.dropdown.item>Delete</x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

## Submenus

Create hierarchical menus with nested items.

@blade
<x-demo >
    <x-ui.dropdown position="bottom-start">
        <x-slot:button>
            <x-ui.button variant="outline">
                File Menu
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
                New File
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
                Open File
            </x-ui.dropdown.item>
            <x-ui.dropdown.submenu label="Recent Files">
                <x-ui.dropdown.item icon="document">
                    document1.pdf
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    project-notes.txt
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    spreadsheet.xlsx
                </x-ui.dropdown.item>
                <x-ui.dropdown.separator />
                <x-ui.dropdown.item class="text-gray-500 dark:text-gray-400">
                    Clear Recent
                </x-ui.dropdown.item>
            </x-ui.dropdown.submenu>
            <x-ui.dropdown.submenu label="Export">
                <x-ui.dropdown.item icon="document">
                    Export as PDF
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    Export as Word
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    Export as Excel
                </x-ui.dropdown.item>
            </x-ui.dropdown.submenu>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item icon="cog">
                Settings
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown position="bottom-start">
    <x-slot:button>
        <x-ui.button variant="outline">
            File Menu
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
            New File
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
            Open File
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.submenu label="Recent Files">
            <x-ui.dropdown.item icon="document">
                document1.pdf
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                project-notes.txt
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                spreadsheet.xlsx
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.separator />
            
            <x-ui.dropdown.item class="text-gray-500 dark:text-gray-400">
                Clear Recent
            </x-ui.dropdown.item>
        </x-ui.dropdown.submenu>
        
        <x-ui.dropdown.submenu label="Export">
            <x-ui.dropdown.item icon="document">
                Export as PDF
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                Export as Word
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                Export as Excel
            </x-ui.dropdown.item>
        </x-ui.dropdown.submenu>

        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item icon="cog">
            Settings
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```

## Complex Structure

Combine all features for sophisticated dropdown menus.

@blade
<x-demo >
    <x-ui.dropdown position="bottom-start">
        <x-slot:button>
            <x-ui.button variant="outline">
                Advanced Menu
            </x-ui.button>
        </x-slot:button>
        <x-slot:menu>
            <x-ui.dropdown.group label="File Operations">
                <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
                    New File
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
                    Open File
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="bookmark" shortcut="⌘S">
                    Save
                </x-ui.dropdown.item>
            </x-ui.dropdown.group>
            <x-ui.dropdown.submenu label="Recent Files">
                <x-ui.dropdown.item icon="document">
                    Important Document.pdf
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    Meeting Notes.txt
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document">
                    Budget 2024.xlsx
                </x-ui.dropdown.item>
            </x-ui.dropdown.submenu>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.group label="Actions">
                <x-ui.dropdown.item icon="pencil">
                    Edit
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="document-duplicate" shortcut="⌘C">
                    Copy
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="clipboard" shortcut="⌘V">
                    Paste
                </x-ui.dropdown.item>
                <x-ui.dropdown.item icon="share">
                    Share
                </x-ui.dropdown.item>
            </x-ui.dropdown.group>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item icon="cog">
                Settings
            </x-ui.dropdown.item>
            <x-ui.dropdown.item icon="question-mark-circle">
                Help
            </x-ui.dropdown.item>
            <x-ui.dropdown.separator />
            <x-ui.dropdown.item icon="trash" variant="danger">
                Delete
            </x-ui.dropdown.item>
        </x-slot:menu>
    </x-ui.dropdown>
</x-demo>
@endblade

```html
<x-ui.dropdown position="bottom-start">
    <x-slot:button>
        <x-ui.button variant="outline">
            Advanced Menu
        </x-ui.button>
    </x-slot:button>
    
    <x-slot:menu>
        <x-ui.dropdown.group label="File Operations">
            <x-ui.dropdown.item icon="document-plus" shortcut="⌘N">
                New File
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="folder-open" shortcut="⌘O">
                Open File
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="bookmark" shortcut="⌘S">
                Save
            </x-ui.dropdown.item>
        </x-ui.dropdown.group>
        
        <x-ui.dropdown.submenu label="Recent Files">
            <x-ui.dropdown.item icon="document">
                Important Document.pdf
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                Meeting Notes.txt
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document">
                Budget 2024.xlsx
            </x-ui.dropdown.item>
        </x-ui.dropdown.submenu>
        
        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.group label="Actions">
            <x-ui.dropdown.item icon="pencil">
                Edit
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="document-duplicate" shortcut="⌘C">
                Copy
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="clipboard" shortcut="⌘V">
                Paste
            </x-ui.dropdown.item>
            
            <x-ui.dropdown.item icon="share">
                Share
            </x-ui.dropdown.item>
        </x-ui.dropdown.group>
        
        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item icon="cog">
            Settings
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.item icon="question-mark-circle">
            Help
        </x-ui.dropdown.item>
        
        <x-ui.dropdown.separator />
        
        <x-ui.dropdown.item icon="trash" variant="danger">
            Delete
        </x-ui.dropdown.item>
    </x-slot:menu>
</x-ui.dropdown>
```
## Component Props

### Dropdown (Main Component)

| Prop Name | Type | Default | Required | Description |
|-----------|------|---------|----------|-------------|
| `position` | string | `'bottom-center'` | No | Dropdown positioning: `bottom-center`, `bottom-start`, `bottom-end`, `top-center`, `top-start`, `top-end` |
| `class` | string | `''` | No | Additional CSS classes |

### Dropdown Item

| Prop Name | Type | Default | Required | Description |
|-----------|------|---------|----------|-------------|
| `disabled` | boolean | `false` | No | Whether the item is disabled |
| `icon` | string | `null` | No | Icon name to display before text |
| `iconAfter` | string | `null` | No | Icon name to display after text |
| `iconVariant` | string | `'mini'` | No | Icon variant/size |
| `shortcut` | string | `null` | No | Keyboard shortcut to display |
| `variant` | string | `'soft'` | No | Visual variant: `soft`, `danger` |
| `href` | string | `null` | No | URL for navigation items |
| `class` | string | `''` | No | Additional CSS classes |

### Dropdown Group

| Prop Name | Type | Default | Required | Description |
|-----------|------|---------|----------|-------------|
| `label` | string | `null` | No | Optional group label |
| `class` | string | `''` | No | Additional CSS classes |

### Dropdown Submenu

| Prop Name | Type | Default | Required | Description |
|-----------|------|---------|----------|-------------|
| `label` | string | - | Yes | Submenu trigger label |
| `disabled` | boolean | `false` | No | Whether the submenu is disabled |
| `class` | string | `''` | No | Additional CSS classes |

### Dropdown Separator

| Prop Name | Type | Default | Required | Description |
|-----------|------|---------|----------|-------------|
| `class` | string | `''` | No | Additional CSS classes |