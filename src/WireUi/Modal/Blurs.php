<?php

namespace WireUi\WireUi\Modal;

use WireUi\Support\ComponentPack;

class Blurs extends ComponentPack
{
    protected function default(): mixed
    {
        return config('wireui.modal.blur') ?? 'none';
    }

    public function all(): array
    {
        return [
            '1'    => 'backdrop-blur',
            '0'    => 'backdrop-blur-none',
            'none' => 'backdrop-blur-none',
            'sm'   => 'backdrop-blur-sm',
            'base' => 'backdrop-blur',
            'md'   => 'backdrop-blur-md',
            'lg'   => 'backdrop-blur-lg',
            'xl'   => 'backdrop-blur-xl',
            '2xl'  => 'backdrop-blur-2xl',
            '3xl'  => 'backdrop-blur-3xl',
        ];
    }
}
