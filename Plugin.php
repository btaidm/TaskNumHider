<?php

namespace Kanboard\Plugin\TaskNumHider;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
	    $this->template->setTemplateOverride('board/task_private','tasknumhider:board/task_private');
	    $this->template->setTemplateOverride('task/dropdown','tasknumhider:task/dropdown');
	    $this->template->setTemplateOverride('task_list/task_title','tasknumhider:task_list/task_title');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'TaskNumHider';
    }

    public function getPluginDescription()
    {
        return t('My plugin is awesome');
    }

    public function getPluginAuthor()
    {
        return 'me';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/btaidm/TaskNumHider.git';
    }
}

