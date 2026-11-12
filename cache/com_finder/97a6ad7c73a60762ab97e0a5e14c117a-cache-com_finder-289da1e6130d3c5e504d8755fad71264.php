<?php die("Access Denied"); ?>#x#a:5:{s:4:"body";s:2064:"<div class="finder">
				<div id="search-form">
			<form id="finder-search" action="/index.php/component/finder/search" method="get" class="form-inline">
				<fieldset class="word">
		<label for="q">
			Условия поиска:		</label>
		<input type="text" name="q" id="q" size="30" value="" class="inputbox" />
					<button name="Search" type="submit" class="btn btn-primary disabled">
				<span class="icon-search icon-white"></span>
				Искать			</button>
							<a href="#advancedSearch" data-toggle="collapse" class="btn">
				<span class="icon-list" aria-hidden="true"></span>
				Расширенный поиск			</a>
			</fieldset>
			<div id="advancedSearch" class="collapse">
			<hr />
							<div id="search-query-explained">
					<div class="advanced-search-tip">
						<p>Примеры работы Умного Поиска:</p><p>Если ввести в поле поиска фразу <span class="term">Война и Мир</span>, будут показаны материалы, содержащие и слово "Война" и слово "Мир".</p><p>Если ввести <span class="term">Война не Мир</span> - материалы, содержащие слово "Война", но не содержащие слово "Мир".</p><p>Если ввести <span class="term">Война или Мир</span> - материалы, содержащие либо слово "Война", либо слово "Мир" (либо оба эти слова).</p><p>Если ввести <span class="term">"Война и Мир"</span> (с кавычками), будут показаны материалы, содержащие именно фразу "Война и Мир" целиком.</p><p>Результаты поиска можно ограничить с помощью фильтров по различным критериям, которые приводятся ниже.</p>					</div>
					<hr />
				</div>
						<div id="finder-filter-window">
							</div>
		</div>
	</form>
		</div>
			</div>
";s:4:"head";a:12:{s:5:"title";s:34:"https://zolotay-karta-petrovich.ru";s:11:"description";s:42:"ЗОЛОТАЯ КАРТА ПЕТРОВИЧ";s:4:"link";s:0:"";s:8:"metaTags";a:2:{s:10:"http-equiv";a:1:{s:12:"content-type";s:24:"text/html; charset=utf-8";}s:4:"name";a:2:{s:8:"keywords";N;s:6:"rights";N;}}s:5:"links";a:2:{s:59:"/index.php/component/finder/search?format=feed&amp;type=rss";a:3:{s:8:"relation";s:9:"alternate";s:7:"relType";s:3:"rel";s:7:"attribs";a:2:{s:4:"type";s:19:"application/rss+xml";s:5:"title";s:7:"RSS 2.0";}}s:60:"/index.php/component/finder/search?format=feed&amp;type=atom";a:3:{s:8:"relation";s:9:"alternate";s:7:"relType";s:3:"rel";s:7:"attribs";a:2:{s:4:"type";s:20:"application/atom+xml";s:5:"title";s:8:"Atom 1.0";}}}s:11:"styleSheets";a:2:{s:25:"/media/jui/css/chosen.css";a:2:{s:4:"type";s:8:"text/css";s:7:"options";a:5:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;s:11:"detectDebug";b:1;}}s:32:"/media/com_finder/css/finder.css";a:2:{s:4:"type";s:8:"text/css";s:7:"options";a:5:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;s:11:"detectDebug";b:1;}}}s:5:"style";a:0:{}s:7:"scripts";a:6:{s:24:"/media/system/js/core.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;s:11:"detectDebug";b:1;}}s:27:"/media/jui/js/jquery.min.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:11:"detectDebug";b:0;s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;}}s:34:"/media/jui/js/jquery-noconflict.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;s:11:"detectDebug";b:1;}}s:35:"/media/jui/js/jquery-migrate.min.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:11:"detectDebug";b:0;s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;}}s:34:"/media/jui/js/chosen.jquery.min.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:11:"detectDebug";s:1:"0";s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;}}s:40:"/media/jui/js/jquery.autocomplete.min.js";a:2:{s:4:"type";s:15:"text/javascript";s:7:"options";a:6:{s:7:"version";s:4:"auto";s:8:"relative";b:1;s:9:"framework";b:0;s:8:"pathOnly";b:0;s:13:"detectBrowser";b:1;s:11:"detectDebug";b:1;}}}s:6:"script";a:1:{s:15:"text/javascript";s:1411:"
	jQuery(function ($) {
		initChosen();
		$("body").on("subform-row-add", initChosen);

		function initChosen(event, container)
		{
			container = container || document;
			$(container).find(".advancedSelect").chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0438\u043b\u0438 \u0432\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u043d\u0435\u0441\u043a\u043e\u043b\u044c\u043a\u043e \u0432\u0430\u0440\u0438\u0430\u043d\u0442\u043e\u0432","placeholder_text_single":"\u0412\u044b\u0431\u0435\u0440\u0438\u0442\u0435 \u0437\u043d\u0430\u0447\u0435\u043d\u0438\u0435","no_results_text":"\u0420\u0435\u0437\u0443\u043b\u044c\u0442\u0430\u0442\u044b \u043d\u0435 \u0441\u043e\u0432\u043f\u0430\u0434\u0430\u044e\u0442"});
		}
	});
	
jQuery(function() {
	jQuery('#finder-search').on('submit', function(e){
		e.stopPropagation();
		// Disable select boxes with no value selected.
		jQuery('#advancedSearch').find('select').each(function(index, el) {
			var el = jQuery(el);
			if(!el.val()){
				el.attr('disabled', 'disabled');
			}
		});
	});
	var suggest = jQuery('#q').autocomplete({
		serviceUrl: '/index.php/component/finder/?task=suggestions.suggest&amp;format=json&amp;tmpl=component',
		paramName: 'q',
		minChars: 1,
		maxHeight: 400,
		width: 300,
		zIndex: 9999,
		deferRequestBy: 500
	});
});";}s:6:"custom";a:0:{}s:10:"scriptText";a:0:{}s:13:"scriptOptions";a:2:{s:10:"csrf.token";s:32:"6d0b7b03b3510d06cf5c2eb37d16dbe3";s:12:"system.paths";a:2:{s:4:"root";s:0:"";s:4:"base";s:0:"";}}}s:13:"mime_encoding";s:9:"text/html";s:7:"pathway";a:0:{}s:6:"module";a:0:{}}