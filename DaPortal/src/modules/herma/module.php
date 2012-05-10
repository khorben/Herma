<?php //$Id$
//Copyright (c) 2012 Pierre Pronchery <khorben@defora.org>
//This file is part of Herma
//
//This program is free software: you can redistribute it and/or modify
//it under the terms of the GNU General Public License as published by
//the Free Software Foundation, version 3 of the License.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.
//
//You should have received a copy of the GNU General Public License
//along with this program.  If not, see <http://www.gnu.org/licenses/>.



require_once('./modules/content/module.php');


//HermaModule
class HermaModule extends ContentModule
{
	//public
	//methods
	//essential
	//HermaModule::HermaModule
	public function __construct($id, $name, $title = FALSE)
	{
		$title = ($title === FALSE) ? _('Herma') : $title;
		parent::__construct($id, $name, $title);
		$this->content_by = _('Sensor from');
		$this->content_item = _('Sensor');
		$this->content_items = _('Sensors');
		$this->content_list_title = _('Sensor list');
		$this->content_more_content = _('Other sensors...');
		$this->content_open_text = _('View');
		$this->content_submit = _('Register sensor');
		$this->content_submit_progress
			= _('Registration in progress, please wait...');
		$this->content_title = _('Herma');
	}
}

?>
