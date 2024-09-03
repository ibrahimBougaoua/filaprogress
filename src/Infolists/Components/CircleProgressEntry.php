<?php

namespace IbrahimBougaoua\FilaProgress\Infolists\Components;

use Filament\Infolists\Components\Entry;

class CircleProgressEntry extends Entry
{
    protected $canShow = true;

    protected string $view = 'filaprogress::infolists.components.circle-progress-entry';

    public function hideProgressValue($canShow = false)
    {
        $this->canShow = $canShow;

        return $this;
    }

    public function getCanShow(): bool
    {
        return $this->canShow;
    }
}
