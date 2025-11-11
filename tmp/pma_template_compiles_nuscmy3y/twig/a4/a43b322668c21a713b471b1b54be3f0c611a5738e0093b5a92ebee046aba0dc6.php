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

/* database/designer/query_details.twig */
class __TwigTemplate_9d0280f4c35d1685b82da1f5ea6deeca659996ea822e94b40bd0b71a4d474cf3 extends \Twig\Template
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
        // line 1
        echo "<div class=\"panel\">
    <div class=\"clearfloat\"></div>
    <div id=\"ab\"></div>
    <div class=\"clearfloat\"></div>
</div>
<a class=\"trigger\" href=\"#\">";
        // line 6
        echo _gettext("Active options");
        echo "</a>
<div id=\"box\">
    <form method=\"post\" action=\"db_qbe.php\" id=\"vqb_form\">
        <textarea cols=\"80\" name=\"sql_query\" id=\"textSqlquery\" rows=\"15\"></textarea>
        <input type=\"hidden\" name=\"submit_sql\" value=\"true\">
        ";
        // line 11
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "database/designer/query_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/query_details.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/query_details.twig");
    }
}
