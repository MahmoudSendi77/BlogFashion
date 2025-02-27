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

/* @Twig/exception.css.twig */
class __TwigTemplate_40dfcc21cbcd80971f96a8fd345a5d05606cf3f5a37fcb13fb3d9ec4782ed1a3 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/exception.css.twig"));

        // line 1
        echo "html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

html {
    /* always display the vertical scrollbar to avoid jumps when toggling contents */
    overflow-y: scroll;
}
body { background-color: #F9F9F9; color: #222; font: 14px/1.4 Helvetica, Arial, sans-serif; padding-bottom: 45px; }

a { cursor: pointer; text-decoration: none; }
a:hover { text-decoration: underline; }
abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, \"Ubuntu Mono\", \"Liberation Mono\", monospace; }

table, tr, th, td { background: #FFF; border-collapse: collapse; vertical-align: top; }
table { background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
table th, table td { border: solid #E0E0E0; border-width: 1px 0; padding: 8px 10px; }
table th { background-color: #E0E0E0; font-weight: bold; text-align: left; }

.hidden-xs-down { display: none; }
.block { display: block; }
.hidden { display: none; }
.nowrap { white-space: nowrap; }
.newline { display: block; }
.break-long-words { word-wrap: break-word; overflow-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; min-width: 0; }
.text-small { font-size: 12px !important; }
.text-muted { color: #999; }
.text-bold { font-weight: bold; }
.empty { border: 4px dashed #E0E0E0; color: #999; margin: 1em 0; padding: .5em 2em; }

.status-success { background: rgba(94, 151, 110, 0.3); }
.status-warning { background: rgba(240, 181, 24, 0.3); }
.status-error { background: rgba(176, 65, 62, 0.2); }
.status-success td, .status-warning td, .status-error td { background: transparent; }
tr.status-error td, tr.status-warning td { border-bottom: 1px solid #FAFAFA; border-top: 1px solid #FAFAFA; }
.status-warning .colored { color: #A46A1F; }
.status-error .colored  { color: #B0413E; }

.sf-toggle { cursor: pointer; }
.sf-toggle-content { -moz-transition: display .25s ease; -webkit-transition: display .25s ease; transition: display .25s ease; }
.sf-toggle-content.sf-toggle-hidden { display: none; }
.sf-toggle-content.sf-toggle-visible { display: block; }
thead.sf-toggle-content.sf-toggle-visible, tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
.sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
.sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

.tab-navigation { margin: 0 0 1em 0; padding: 0; }
.tab-navigation li { background: #FFF; border: 1px solid #DDD; color: #444; cursor: pointer; display: inline-block; font-size: 16px; margin: 0 0 0 -1px; padding: .5em .75em; z-index: 1; }
.tab-navigation li:hover { background: #EEE; }
.tab-navigation li.disabled { background: #F5F5F5; color: #999; }
.tab-navigation li.active { background: #666; border-color: #666; color: #FAFAFA; z-index: 1100; }
.tab-navigation li .badge { background-color: #F5F5F5; color: #777; display: inline-block; font-size: 14px; font-weight: bold; margin-left: 8px; min-width: 10px; padding: 1px 6px; text-align: center; }
.tab-navigation li:hover .badge { background: #FAFAFA; color: #777; }
.tab-navigation li.active .badge { background-color: #444; color: #FFF; }
.tab-navigation li .badge.status-warning { background: #A46A1F; color: #FFF; }
.tab-navigation li .badge.status-error { background: #B0413E; color: #FFF; }
.tab-content > *:first-child { margin-top: 0; }

.container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
.container::after { content: \"\"; display: table; clear: both; }

header { background-color: #222; color: rgba(255, 255, 255, 0.75); font-size: 13px; height: 33px; line-height: 33px; padding: 0; }
header .container { display: flex; justify-content: space-between; }
.logo { flex: 1; font-size: 13px; font-weight: normal; margin: 0; padding: 0; }
.logo svg { height: 18px; width: 18px; opacity: .8; vertical-align: -5px; }

.help-link { margin-left: 15px; }
.help-link a { color: inherit; }
.help-link .icon svg { height: 15px; width: 15px; opacity: .7; vertical-align: -2px; }
.help-link a:hover { color: #EEE; text-decoration: none; }
.help-link a:hover svg { opacity: .9; }

.exception-summary { background: #B0413E; border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 15px; }
.exception-metadata { background: rgba(0, 0, 0, 0.1); padding: 7px 0; }
.exception-metadata .container { display: flex; flex-direction: row; justify-content: space-between; }
.exception-metadata h2 { color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 400; margin: 0; }
.exception-http small { font-size: 13px; opacity: .7; }
.exception-hierarchy { flex: 1; }
.exception-hierarchy .icon { margin: 0 3px; opacity: .7; }
.exception-hierarchy .icon svg { height: 13px; width: 13px; vertical-align: -2px; }

.exception-without-message .exception-message-wrapper { display: none; }
.exception-message-wrapper .container { display: flex; align-items: flex-start; min-height: 70px; padding: 10px 15px 8px; }
.exception-message { flex-grow: 1; }
.exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
.exception-message.long { font-size: 18px; }
.exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
.exception-message a:hover { border-bottom-color: #ffffff; }

.exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

.trace + .trace { margin-top: 30px; }
.trace-head { background-color: #e0e0e0; padding: 10px; }
.trace-head .trace-class { color: #222; font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }
.trace-head .trace-namespace { color: #999; display: block; font-size: 13px; }
.trace-head .icon { position: absolute; right: 0; top: 0; }
.trace-head .icon svg { height: 24px; width: 24px; }

.trace-details { background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; }

.trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }
.trace-details { table-layout: fixed; }
.trace-line { position: relative; padding-top: 8px; padding-bottom: 8px; }
.trace-line:hover { background: #F5F5F5; }
.trace-line a { color: #222; }
.trace-line .icon { opacity: .4; position: absolute; left: 10px; top: 11px; }
.trace-line .icon svg { height: 16px; width: 16px; }
.trace-line-header { padding-left: 36px; padding-right: 10px; }

.trace-file-path, .trace-file-path a { color: #222; font-size: 13px; }
.trace-class { color: #B0413E; }
.trace-type { padding: 0 2px; }
.trace-method { color: #B0413E; font-weight: bold; }
.trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

.trace-code { background: #FFF; font-size: 12px; margin: 10px 10px 2px 10px; padding: 10px; overflow-x: auto; white-space: nowrap; }
.trace-code ol { margin: 0; float: left; }
.trace-code li { color: #969896; margin: 0; padding-left: 10px; float: left; width: 100%; }
.trace-code li + li { margin-top: 5px; }
.trace-code li.selected { background: #F7E5A1; margin-top: 2px; }
.trace-code li code { color: #222; white-space: nowrap; }

.trace-as-text .stacktrace { line-height: 1.8; margin: 0 0 15px; white-space: pre-wrap; }

@media (min-width: 575px) {
    .hidden-xs-down { display: initial; }
    .help-link { margin-left: 30px; }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

html {
    /* always display the vertical scrollbar to avoid jumps when toggling contents */
    overflow-y: scroll;
}
body { background-color: #F9F9F9; color: #222; font: 14px/1.4 Helvetica, Arial, sans-serif; padding-bottom: 45px; }

a { cursor: pointer; text-decoration: none; }
a:hover { text-decoration: underline; }
abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, \"Ubuntu Mono\", \"Liberation Mono\", monospace; }

table, tr, th, td { background: #FFF; border-collapse: collapse; vertical-align: top; }
table { background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
table th, table td { border: solid #E0E0E0; border-width: 1px 0; padding: 8px 10px; }
table th { background-color: #E0E0E0; font-weight: bold; text-align: left; }

.hidden-xs-down { display: none; }
.block { display: block; }
.hidden { display: none; }
.nowrap { white-space: nowrap; }
.newline { display: block; }
.break-long-words { word-wrap: break-word; overflow-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; min-width: 0; }
.text-small { font-size: 12px !important; }
.text-muted { color: #999; }
.text-bold { font-weight: bold; }
.empty { border: 4px dashed #E0E0E0; color: #999; margin: 1em 0; padding: .5em 2em; }

.status-success { background: rgba(94, 151, 110, 0.3); }
.status-warning { background: rgba(240, 181, 24, 0.3); }
.status-error { background: rgba(176, 65, 62, 0.2); }
.status-success td, .status-warning td, .status-error td { background: transparent; }
tr.status-error td, tr.status-warning td { border-bottom: 1px solid #FAFAFA; border-top: 1px solid #FAFAFA; }
.status-warning .colored { color: #A46A1F; }
.status-error .colored  { color: #B0413E; }

.sf-toggle { cursor: pointer; }
.sf-toggle-content { -moz-transition: display .25s ease; -webkit-transition: display .25s ease; transition: display .25s ease; }
.sf-toggle-content.sf-toggle-hidden { display: none; }
.sf-toggle-content.sf-toggle-visible { display: block; }
thead.sf-toggle-content.sf-toggle-visible, tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
.sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
.sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

.tab-navigation { margin: 0 0 1em 0; padding: 0; }
.tab-navigation li { background: #FFF; border: 1px solid #DDD; color: #444; cursor: pointer; display: inline-block; font-size: 16px; margin: 0 0 0 -1px; padding: .5em .75em; z-index: 1; }
.tab-navigation li:hover { background: #EEE; }
.tab-navigation li.disabled { background: #F5F5F5; color: #999; }
.tab-navigation li.active { background: #666; border-color: #666; color: #FAFAFA; z-index: 1100; }
.tab-navigation li .badge { background-color: #F5F5F5; color: #777; display: inline-block; font-size: 14px; font-weight: bold; margin-left: 8px; min-width: 10px; padding: 1px 6px; text-align: center; }
.tab-navigation li:hover .badge { background: #FAFAFA; color: #777; }
.tab-navigation li.active .badge { background-color: #444; color: #FFF; }
.tab-navigation li .badge.status-warning { background: #A46A1F; color: #FFF; }
.tab-navigation li .badge.status-error { background: #B0413E; color: #FFF; }
.tab-content > *:first-child { margin-top: 0; }

.container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
.container::after { content: \"\"; display: table; clear: both; }

header { background-color: #222; color: rgba(255, 255, 255, 0.75); font-size: 13px; height: 33px; line-height: 33px; padding: 0; }
header .container { display: flex; justify-content: space-between; }
.logo { flex: 1; font-size: 13px; font-weight: normal; margin: 0; padding: 0; }
.logo svg { height: 18px; width: 18px; opacity: .8; vertical-align: -5px; }

.help-link { margin-left: 15px; }
.help-link a { color: inherit; }
.help-link .icon svg { height: 15px; width: 15px; opacity: .7; vertical-align: -2px; }
.help-link a:hover { color: #EEE; text-decoration: none; }
.help-link a:hover svg { opacity: .9; }

.exception-summary { background: #B0413E; border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 15px; }
.exception-metadata { background: rgba(0, 0, 0, 0.1); padding: 7px 0; }
.exception-metadata .container { display: flex; flex-direction: row; justify-content: space-between; }
.exception-metadata h2 { color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 400; margin: 0; }
.exception-http small { font-size: 13px; opacity: .7; }
.exception-hierarchy { flex: 1; }
.exception-hierarchy .icon { margin: 0 3px; opacity: .7; }
.exception-hierarchy .icon svg { height: 13px; width: 13px; vertical-align: -2px; }

.exception-without-message .exception-message-wrapper { display: none; }
.exception-message-wrapper .container { display: flex; align-items: flex-start; min-height: 70px; padding: 10px 15px 8px; }
.exception-message { flex-grow: 1; }
.exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
.exception-message.long { font-size: 18px; }
.exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
.exception-message a:hover { border-bottom-color: #ffffff; }

.exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

.trace + .trace { margin-top: 30px; }
.trace-head { background-color: #e0e0e0; padding: 10px; }
.trace-head .trace-class { color: #222; font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }
.trace-head .trace-namespace { color: #999; display: block; font-size: 13px; }
.trace-head .icon { position: absolute; right: 0; top: 0; }
.trace-head .icon svg { height: 24px; width: 24px; }

.trace-details { background: #FFF; border: 1px solid #E0E0E0; box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; }

.trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }
.trace-details { table-layout: fixed; }
.trace-line { position: relative; padding-top: 8px; padding-bottom: 8px; }
.trace-line:hover { background: #F5F5F5; }
.trace-line a { color: #222; }
.trace-line .icon { opacity: .4; position: absolute; left: 10px; top: 11px; }
.trace-line .icon svg { height: 16px; width: 16px; }
.trace-line-header { padding-left: 36px; padding-right: 10px; }

.trace-file-path, .trace-file-path a { color: #222; font-size: 13px; }
.trace-class { color: #B0413E; }
.trace-type { padding: 0 2px; }
.trace-method { color: #B0413E; font-weight: bold; }
.trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

.trace-code { background: #FFF; font-size: 12px; margin: 10px 10px 2px 10px; padding: 10px; overflow-x: auto; white-space: nowrap; }
.trace-code ol { margin: 0; float: left; }
.trace-code li { color: #969896; margin: 0; padding-left: 10px; float: left; width: 100%; }
.trace-code li + li { margin-top: 5px; }
.trace-code li.selected { background: #F7E5A1; margin-top: 2px; }
.trace-code li code { color: #222; white-space: nowrap; }

.trace-as-text .stacktrace { line-height: 1.8; margin: 0 0 15px; white-space: pre-wrap; }

@media (min-width: 575px) {
    .hidden-xs-down { display: initial; }
    .help-link { margin-left: 30px; }
}
", "@Twig/exception.css.twig", "C:\\wamp64\\www\\Chick_Click\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\exception.css.twig");
    }
}
