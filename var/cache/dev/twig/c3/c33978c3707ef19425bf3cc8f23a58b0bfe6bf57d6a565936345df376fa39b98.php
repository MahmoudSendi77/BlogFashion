<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_06b7fa157be743f4bdeddf7e73d6e0c9fa1080e6c2fe8e504823ae6c255b8f38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base_js.html.twig"));

        // line 3
        echo "<script";
        if (((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context)) && (isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")))) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, (isset($context["csp_script_nonce"]) ? $context["csp_script_nonce"] : $this->getContext($context, "csp_script_nonce")), "html", null, true);
            echo "\"";
        }
        echo ">/*<![CDATA[*/
    ";
        // line 7
        echo "
    Sfjs = (function() {
        \"use strict\";

        if ('classList' in document.documentElement) {
            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
            var addClass = function(el, cssClass) { el.classList.add(cssClass); };
            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
        } else {
            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
        }

        var noop = function() {};

        var profilerStorageKey = 'symfony/profiler/';

        var request = function(url, onSuccess, onError, payload, options) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            options = options || {};
            options.maxTries = options.maxTries || 0;
            xhr.open(options.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function(state) {
                if (4 !== xhr.readyState) {
                    return null;
                }

                if (xhr.status == 404 && options.maxTries > 1) {
                    setTimeout(function(){
                        options.maxTries--;
                        request(url, onSuccess, onError, payload, options);
                    }, 1000);

                    return null;
                }

                if (200 === xhr.status) {
                    (onSuccess || noop)(xhr);
                } else {
                    (onError || noop)(xhr);
                }
            };
            xhr.send(payload || '');
        };

        var getPreference = function(name) {
            if (!window.localStorage) {
                return null;
            }

            return localStorage.getItem(profilerStorageKey + name);
        };

        var setPreference = function(name, value) {
            if (!window.localStorage) {
                return null;
            }

            localStorage.setItem(profilerStorageKey + name, value);
        };

        var requestStack = [];

        var extractHeaders = function(xhr, stackElement) {
            /* Here we avoid to call xhr.getResponseHeader in order to */
            /* prevent polluting the console with CORS security errors */
            var allHeaders = xhr.getAllResponseHeaders();
            var ret;

            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                stackElement.profile = ret[1];
            }
            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                stackElement.profilerUrl = ret[1];
            }
        };

        var successStreak = 4;
        var pendingRequests = 0;
        var renderAjaxRequests = function() {
            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
            if (!requestCounter) {
                return;
            }
            requestCounter.textContent = requestStack.length;

            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
            if (infoSpan) {
                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
            }

            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
            if (requestStack.length) {
                ajaxToolbarPanel.style.display = 'block';
            } else {
                ajaxToolbarPanel.style.display = 'none';
            }
            if (pendingRequests > 0) {
                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else if (successStreak < 4) {
                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else {
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
            }
        };

        var startAjaxRequest = function(index) {
            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
            if (!tbody) {
                return;
            }

            var nbOfAjaxRequest = tbody.rows.length;
            if (nbOfAjaxRequest >= 100) {
                tbody.deleteRow(nbOfAjaxRequest - 1);
            }

            var request = requestStack[index];
            pendingRequests++;
            var row = document.createElement('tr');
            request.DOMNode = row;

            var methodCell = document.createElement('td');
            methodCell.textContent = request.method;
            row.appendChild(methodCell);

            var typeCell = document.createElement('td');
            typeCell.textContent = request.type;
            row.appendChild(typeCell);

            var statusCodeCell = document.createElement('td');
            var statusCode = document.createElement('span');
            statusCode.textContent = 'n/a';
            statusCodeCell.appendChild(statusCode);
            row.appendChild(statusCodeCell);

            var pathCell = document.createElement('td');
            pathCell.className = 'sf-ajax-request-url';
            if ('GET' === request.method) {
                var pathLink = document.createElement('a');
                pathLink.setAttribute('href', request.url);
                pathLink.textContent = request.url;
                pathCell.appendChild(pathLink);
            } else {
                pathCell.textContent = request.url;
            }
            pathCell.setAttribute('title', request.url);
            row.appendChild(pathCell);

            var durationCell = document.createElement('td');
            durationCell.className = 'sf-ajax-request-duration';
            durationCell.textContent = 'n/a';
            row.appendChild(durationCell);

            var profilerCell = document.createElement('td');
            profilerCell.textContent = 'n/a';
            row.appendChild(profilerCell);

            row.className = 'sf-ajax-request sf-ajax-request-loading';
            tbody.insertBefore(row, tbody.firstChild);

            renderAjaxRequests();
        };

        var finishAjaxRequest = function(index) {
            var request = requestStack[index];
            if (!request.DOMNode) {
                return;
            }
            pendingRequests--;
            var row = request.DOMNode;
            /* Unpack the children from the row */
            var methodCell = row.children[0];
            var statusCodeCell = row.children[2];
            var statusCodeElem = statusCodeCell.children[0];
            var durationCell = row.children[4];
            var profilerCell = row.children[5];

            if (request.error) {
                row.className = 'sf-ajax-request sf-ajax-request-error';
                methodCell.className = 'sf-ajax-request-error';
                successStreak = 0;
            } else {
                row.className = 'sf-ajax-request sf-ajax-request-ok';
                successStreak++;
            }

            if (request.statusCode) {
                if (request.statusCode < 300) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                } else if (request.statusCode < 400) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }
                statusCodeElem.textContent = request.statusCode;
            } else {
                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
            }

            if (request.duration) {
                durationCell.textContent = request.duration + 'ms';
            }

            if (request.profilerUrl) {
                profilerCell.textContent = '';
                var profilerLink = document.createElement('a');
                profilerLink.setAttribute('href', request.profilerUrl);
                profilerLink.textContent = request.profile;
                profilerCell.appendChild(profilerLink);
            }

            renderAjaxRequests();
        };

        var addEventListener;

        var el = document.createElement('div');
        if (!('addEventListener' in el)) {
            addEventListener = function (element, eventName, callback) {
                element.attachEvent('on' + eventName, callback);
            };
        } else {
            addEventListener = function (element, eventName, callback) {
                element.addEventListener(eventName, callback, false);
            };
        }

        ";
        // line 241
        if ((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context))) {
            // line 242
            echo "            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp(";
            // line 261
            echo twig_jsonencode_filter((isset($context["excluded_ajax_paths"]) ? $context["excluded_ajax_paths"] : $this->getContext($context, "excluded_ajax_paths")));
            echo "))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.substr(0, 1) === '/') {
                        if (0 === url.indexOf('";
            // line 302
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "basePath", []), "js"), "html", null, true);
            echo "')) {
                            path = url.substr(";
            // line 303
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "basePath", [])), "html", null, true);
            echo ");
                        }
                    }
                    else if (0 === url.indexOf('";
            // line 306
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "schemeAndHttpHost", []) . $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "basePath", [])), "js"), "html", null, true);
            echo "')) {
                        path = url.substr(";
            // line 307
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "schemeAndHttpHost", []) . $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "basePath", []))), "html", null, true);
            echo ");
                    }

                    if (!path.match(new RegExp(";
            // line 310
            echo twig_jsonencode_filter((isset($context["excluded_ajax_paths"]) ? $context["excluded_ajax_paths"] : $this->getContext($context, "excluded_ajax_paths")));
            echo "))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
        ";
        }
        // line 339
        echo "
        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            toggleClass: toggleClass,

            getPreference: getPreference,

            setPreference: setPreference,

            addEventListener: addEventListener,

            request: request,

            renderAjaxRequests: renderAjaxRequests,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            for (var i = 0; i < requestStack.length; i++) {
                                startAjaxRequest(i);
                                if (requestStack[i].duration) {
                                    finishAjaxRequest(i);
                                }
                            }
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            },

            createTabs: function() {
                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

                /* create the tab navigation for each group of tabs */
                for (var i = 0; i < tabGroups.length; i++) {
                    var tabs = tabGroups[i].querySelectorAll('.tab');
                    var tabNavigation = document.createElement('ul');
                    tabNavigation.className = 'tab-navigation';

                    for (var j = 0; j < tabs.length; j++) {
                        var tabId = 'tab-' + i + '-' + j;
                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                        var tabNavigationItem = document.createElement('li');
                        tabNavigationItem.setAttribute('data-tab-id', tabId);
                        if (j == 0) { addClass(tabNavigationItem, 'active'); }
                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }
                        tabNavigationItem.innerHTML = tabTitle;
                        tabNavigation.appendChild(tabNavigationItem);

                        var tabContent = tabs[j].querySelector('.tab-content');
                        tabContent.parentElement.setAttribute('id', tabId);
                    }

                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                }

                /* display the active tab and add the 'click' event listeners */
                for (i = 0; i < tabGroups.length; i++) {
                    tabNavigation = tabGroups[i].querySelectorAll('.tab-navigation li');

                    for (j = 0; j < tabNavigation.length; j++) {
                        tabId = tabNavigation[j].getAttribute('data-tab-id');
                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                        if (hasClass(tabNavigation[j], 'active')) {
                            document.getElementById(tabId).className = 'block';
                        } else {
                            document.getElementById(tabId).className = 'hidden';
                        }

                        tabNavigation[j].addEventListener('click', function(e) {
                            var activeTab = e.target || e.srcElement;

                            /* needed because when the tab contains HTML contents, user can click */
                            /* on any of those elements instead of their parent '<li>' element */
                            while (activeTab.tagName.toLowerCase() !== 'li') {
                                activeTab = activeTab.parentNode;
                            }

                            /* get the full list of tabs through the parent of the active tab element */
                            var tabNavigation = activeTab.parentNode.children;
                            for (var k = 0; k < tabNavigation.length; k++) {
                                var tabId = tabNavigation[k].getAttribute('data-tab-id');
                                document.getElementById(tabId).className = 'hidden';
                                removeClass(tabNavigation[k], 'active');
                            }

                            addClass(activeTab, 'active');
                            var activeTabId = activeTab.getAttribute('data-tab-id');
                            document.getElementById(activeTabId).className = 'block';
                        });
                    }

                    tabGroups[i].setAttribute('data-processed', 'true');
                }
            },

            createToggles: function() {
                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');

                for (var i = 0; i < toggles.length; i++) {
                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                    var element = document.querySelector(elementSelector);

                    addClass(element, 'sf-toggle-content');

                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                        addClass(toggles[i], 'sf-toggle-on');
                        addClass(element, 'sf-toggle-visible');
                    } else {
                        addClass(toggles[i], 'sf-toggle-off');
                        addClass(element, 'sf-toggle-hidden');
                    }

                    addEventListener(toggles[i], 'click', function(e) {
                        e.preventDefault();

                        if ('' !== window.getSelection().toString()) {
                            /* Don't do anything on text selection */
                            return;
                        }

                        var toggle = e.target || e.srcElement;

                        /* needed because when the toggle contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '.sf-toggle' element */
                        while (!hasClass(toggle, 'sf-toggle')) {
                            toggle = toggle.parentNode;
                        }

                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                        toggleClass(toggle, 'sf-toggle-on');
                        toggleClass(toggle, 'sf-toggle-off');
                        toggleClass(element, 'sf-toggle-hidden');
                        toggleClass(element, 'sf-toggle-visible');

                        /* the toggle doesn't change its contents when clicking on it */
                        if (!toggle.hasAttribute('data-toggle-alt-content')) {
                            return;
                        }

                        if (!toggle.hasAttribute('data-toggle-original-content')) {
                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                        }

                        var currentContent = toggle.innerHTML;
                        var originalContent = toggle.getAttribute('data-toggle-original-content');
                        var altContent = toggle.getAttribute('data-toggle-alt-content');
                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                    });

                    /* Prevents from disallowing clicks on links inside toggles */
                    var toggleLinks = toggles[i].querySelectorAll('a');
                    for (var j = 0; j < toggleLinks.length; j++) {
                        addEventListener(toggleLinks[j], 'click', function(e) {
                            e.stopPropagation();
                        });
                    }

                    toggles[i].setAttribute('data-processed', 'true');
                }
            }
        };
    })();

    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {
        Sfjs.createTabs();
        Sfjs.createToggles();
    });

/*]]>*/</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 339,  365 => 310,  359 => 307,  355 => 306,  349 => 303,  345 => 302,  301 => 261,  280 => 242,  278 => 241,  42 => 7,  33 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# This file is partially duplicated in TwigBundle/Resources/views/base_js.html.twig. If you
   make any change in this file, verify the same change is needed in the other file. #}
<script{% if csp_script_nonce is defined and csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>/*<![CDATA[*/
    {# Caution: the contents of this file are processed by Twig before loading
                them as JavaScript source code. Always use '/*' comments instead
                of '//' comments to avoid impossible-to-debug side-effects #}

    Sfjs = (function() {
        \"use strict\";

        if ('classList' in document.documentElement) {
            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
            var addClass = function(el, cssClass) { el.classList.add(cssClass); };
            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
        } else {
            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
        }

        var noop = function() {};

        var profilerStorageKey = 'symfony/profiler/';

        var request = function(url, onSuccess, onError, payload, options) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            options = options || {};
            options.maxTries = options.maxTries || 0;
            xhr.open(options.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function(state) {
                if (4 !== xhr.readyState) {
                    return null;
                }

                if (xhr.status == 404 && options.maxTries > 1) {
                    setTimeout(function(){
                        options.maxTries--;
                        request(url, onSuccess, onError, payload, options);
                    }, 1000);

                    return null;
                }

                if (200 === xhr.status) {
                    (onSuccess || noop)(xhr);
                } else {
                    (onError || noop)(xhr);
                }
            };
            xhr.send(payload || '');
        };

        var getPreference = function(name) {
            if (!window.localStorage) {
                return null;
            }

            return localStorage.getItem(profilerStorageKey + name);
        };

        var setPreference = function(name, value) {
            if (!window.localStorage) {
                return null;
            }

            localStorage.setItem(profilerStorageKey + name, value);
        };

        var requestStack = [];

        var extractHeaders = function(xhr, stackElement) {
            /* Here we avoid to call xhr.getResponseHeader in order to */
            /* prevent polluting the console with CORS security errors */
            var allHeaders = xhr.getAllResponseHeaders();
            var ret;

            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                stackElement.profile = ret[1];
            }
            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                stackElement.profilerUrl = ret[1];
            }
        };

        var successStreak = 4;
        var pendingRequests = 0;
        var renderAjaxRequests = function() {
            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
            if (!requestCounter) {
                return;
            }
            requestCounter.textContent = requestStack.length;

            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
            if (infoSpan) {
                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
            }

            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
            if (requestStack.length) {
                ajaxToolbarPanel.style.display = 'block';
            } else {
                ajaxToolbarPanel.style.display = 'none';
            }
            if (pendingRequests > 0) {
                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else if (successStreak < 4) {
                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else {
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
            }
        };

        var startAjaxRequest = function(index) {
            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
            if (!tbody) {
                return;
            }

            var nbOfAjaxRequest = tbody.rows.length;
            if (nbOfAjaxRequest >= 100) {
                tbody.deleteRow(nbOfAjaxRequest - 1);
            }

            var request = requestStack[index];
            pendingRequests++;
            var row = document.createElement('tr');
            request.DOMNode = row;

            var methodCell = document.createElement('td');
            methodCell.textContent = request.method;
            row.appendChild(methodCell);

            var typeCell = document.createElement('td');
            typeCell.textContent = request.type;
            row.appendChild(typeCell);

            var statusCodeCell = document.createElement('td');
            var statusCode = document.createElement('span');
            statusCode.textContent = 'n/a';
            statusCodeCell.appendChild(statusCode);
            row.appendChild(statusCodeCell);

            var pathCell = document.createElement('td');
            pathCell.className = 'sf-ajax-request-url';
            if ('GET' === request.method) {
                var pathLink = document.createElement('a');
                pathLink.setAttribute('href', request.url);
                pathLink.textContent = request.url;
                pathCell.appendChild(pathLink);
            } else {
                pathCell.textContent = request.url;
            }
            pathCell.setAttribute('title', request.url);
            row.appendChild(pathCell);

            var durationCell = document.createElement('td');
            durationCell.className = 'sf-ajax-request-duration';
            durationCell.textContent = 'n/a';
            row.appendChild(durationCell);

            var profilerCell = document.createElement('td');
            profilerCell.textContent = 'n/a';
            row.appendChild(profilerCell);

            row.className = 'sf-ajax-request sf-ajax-request-loading';
            tbody.insertBefore(row, tbody.firstChild);

            renderAjaxRequests();
        };

        var finishAjaxRequest = function(index) {
            var request = requestStack[index];
            if (!request.DOMNode) {
                return;
            }
            pendingRequests--;
            var row = request.DOMNode;
            /* Unpack the children from the row */
            var methodCell = row.children[0];
            var statusCodeCell = row.children[2];
            var statusCodeElem = statusCodeCell.children[0];
            var durationCell = row.children[4];
            var profilerCell = row.children[5];

            if (request.error) {
                row.className = 'sf-ajax-request sf-ajax-request-error';
                methodCell.className = 'sf-ajax-request-error';
                successStreak = 0;
            } else {
                row.className = 'sf-ajax-request sf-ajax-request-ok';
                successStreak++;
            }

            if (request.statusCode) {
                if (request.statusCode < 300) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                } else if (request.statusCode < 400) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }
                statusCodeElem.textContent = request.statusCode;
            } else {
                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
            }

            if (request.duration) {
                durationCell.textContent = request.duration + 'ms';
            }

            if (request.profilerUrl) {
                profilerCell.textContent = '';
                var profilerLink = document.createElement('a');
                profilerLink.setAttribute('href', request.profilerUrl);
                profilerLink.textContent = request.profile;
                profilerCell.appendChild(profilerLink);
            }

            renderAjaxRequests();
        };

        var addEventListener;

        var el = document.createElement('div');
        if (!('addEventListener' in el)) {
            addEventListener = function (element, eventName, callback) {
                element.attachEvent('on' + eventName, callback);
            };
        } else {
            addEventListener = function (element, eventName, callback) {
                element.addEventListener(eventName, callback, false);
            };
        }

        {% if excluded_ajax_paths is defined %}
            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.substr(0, 1) === '/') {
                        if (0 === url.indexOf('{{ request.basePath|e('js') }}')) {
                            path = url.substr({{ request.basePath|length }});
                        }
                    }
                    else if (0 === url.indexOf('{{ (request.schemeAndHttpHost ~ request.basePath)|e('js') }}')) {
                        path = url.substr({{ (request.schemeAndHttpHost ~ request.basePath)|length }});
                    }

                    if (!path.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
        {% endif %}

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            toggleClass: toggleClass,

            getPreference: getPreference,

            setPreference: setPreference,

            addEventListener: addEventListener,

            request: request,

            renderAjaxRequests: renderAjaxRequests,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            for (var i = 0; i < requestStack.length; i++) {
                                startAjaxRequest(i);
                                if (requestStack[i].duration) {
                                    finishAjaxRequest(i);
                                }
                            }
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            },

            createTabs: function() {
                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

                /* create the tab navigation for each group of tabs */
                for (var i = 0; i < tabGroups.length; i++) {
                    var tabs = tabGroups[i].querySelectorAll('.tab');
                    var tabNavigation = document.createElement('ul');
                    tabNavigation.className = 'tab-navigation';

                    for (var j = 0; j < tabs.length; j++) {
                        var tabId = 'tab-' + i + '-' + j;
                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                        var tabNavigationItem = document.createElement('li');
                        tabNavigationItem.setAttribute('data-tab-id', tabId);
                        if (j == 0) { addClass(tabNavigationItem, 'active'); }
                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }
                        tabNavigationItem.innerHTML = tabTitle;
                        tabNavigation.appendChild(tabNavigationItem);

                        var tabContent = tabs[j].querySelector('.tab-content');
                        tabContent.parentElement.setAttribute('id', tabId);
                    }

                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                }

                /* display the active tab and add the 'click' event listeners */
                for (i = 0; i < tabGroups.length; i++) {
                    tabNavigation = tabGroups[i].querySelectorAll('.tab-navigation li');

                    for (j = 0; j < tabNavigation.length; j++) {
                        tabId = tabNavigation[j].getAttribute('data-tab-id');
                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                        if (hasClass(tabNavigation[j], 'active')) {
                            document.getElementById(tabId).className = 'block';
                        } else {
                            document.getElementById(tabId).className = 'hidden';
                        }

                        tabNavigation[j].addEventListener('click', function(e) {
                            var activeTab = e.target || e.srcElement;

                            /* needed because when the tab contains HTML contents, user can click */
                            /* on any of those elements instead of their parent '<li>' element */
                            while (activeTab.tagName.toLowerCase() !== 'li') {
                                activeTab = activeTab.parentNode;
                            }

                            /* get the full list of tabs through the parent of the active tab element */
                            var tabNavigation = activeTab.parentNode.children;
                            for (var k = 0; k < tabNavigation.length; k++) {
                                var tabId = tabNavigation[k].getAttribute('data-tab-id');
                                document.getElementById(tabId).className = 'hidden';
                                removeClass(tabNavigation[k], 'active');
                            }

                            addClass(activeTab, 'active');
                            var activeTabId = activeTab.getAttribute('data-tab-id');
                            document.getElementById(activeTabId).className = 'block';
                        });
                    }

                    tabGroups[i].setAttribute('data-processed', 'true');
                }
            },

            createToggles: function() {
                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');

                for (var i = 0; i < toggles.length; i++) {
                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                    var element = document.querySelector(elementSelector);

                    addClass(element, 'sf-toggle-content');

                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                        addClass(toggles[i], 'sf-toggle-on');
                        addClass(element, 'sf-toggle-visible');
                    } else {
                        addClass(toggles[i], 'sf-toggle-off');
                        addClass(element, 'sf-toggle-hidden');
                    }

                    addEventListener(toggles[i], 'click', function(e) {
                        e.preventDefault();

                        if ('' !== window.getSelection().toString()) {
                            /* Don't do anything on text selection */
                            return;
                        }

                        var toggle = e.target || e.srcElement;

                        /* needed because when the toggle contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '.sf-toggle' element */
                        while (!hasClass(toggle, 'sf-toggle')) {
                            toggle = toggle.parentNode;
                        }

                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                        toggleClass(toggle, 'sf-toggle-on');
                        toggleClass(toggle, 'sf-toggle-off');
                        toggleClass(element, 'sf-toggle-hidden');
                        toggleClass(element, 'sf-toggle-visible');

                        /* the toggle doesn't change its contents when clicking on it */
                        if (!toggle.hasAttribute('data-toggle-alt-content')) {
                            return;
                        }

                        if (!toggle.hasAttribute('data-toggle-original-content')) {
                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                        }

                        var currentContent = toggle.innerHTML;
                        var originalContent = toggle.getAttribute('data-toggle-original-content');
                        var altContent = toggle.getAttribute('data-toggle-alt-content');
                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                    });

                    /* Prevents from disallowing clicks on links inside toggles */
                    var toggleLinks = toggles[i].querySelectorAll('a');
                    for (var j = 0; j < toggleLinks.length; j++) {
                        addEventListener(toggleLinks[j], 'click', function(e) {
                            e.stopPropagation();
                        });
                    }

                    toggles[i].setAttribute('data-processed', 'true');
                }
            }
        };
    })();

    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {
        Sfjs.createTabs();
        Sfjs.createToggles();
    });

/*]]>*/</script>
", "@WebProfiler/Profiler/base_js.html.twig", "C:\\wamp64\\www\\Chick_Click\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\base_js.html.twig");
    }
}
