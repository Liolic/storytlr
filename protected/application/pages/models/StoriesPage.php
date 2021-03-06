<?php
/*
 *    Copyright 2008-2009 Laurent Eschenauer and Alard Weisscher
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 *  
 */

class StoriesPage extends Stuffpress_PageModel {

	protected $_prefix	= 'stories';
	
	protected $_name 	= 'Stories';
	
	protected $_description = 'Page with an overview of all stories created with Storytlr.';

	public function getDefaultValues() {
		$values = array();
		$values['title'] = 'Stories';
		$values['id']	 = '0';		
		return $values;
	}
}