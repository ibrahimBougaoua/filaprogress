<?php

namespace IbrahimBougaoua\FilaProgress\Infolists\Components;

use Filament\Infolists\Components\Entry;

class ProgressBarEntry extends Entry
{
    protected $canShow = true;

    protected string $view = 'filaprogress::infolists.components.progress-bar-entry';

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
