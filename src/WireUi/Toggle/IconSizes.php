<?php

namespace WireUi\WireUi\Toggle;

use WireUi\Support\ComponentPack;

class IconSizes extends ComponentPack
{
    protected function default(): mixed
    {
        return config('wireui.toggle.icon-size') ?? 'sm';
    }

    public function all(): array
    {
        return [
            'xs' => 'icon xs',
            'sm' => 'icon sm',
            'md' => 'icon md',
            'lg' => 'icon lg',
            'xl' => 'icon xl',
        ];
    }
}
