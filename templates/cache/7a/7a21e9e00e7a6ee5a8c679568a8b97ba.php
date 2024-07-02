<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/category-delete.html */
class __TwigTemplate_62bbbc2bf448a4967ebf177f25224544 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category-delete.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form method=\"post\" action=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/category-delete.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
        yield "\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this category?</p>
        <button type=\"submit\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories.php\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
    </form>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category-delete.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  66 => 9,  60 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto p-10 flex flex-col items-center\">
    <form method=\"post\" action=\"{{doc_root}}admin/category-delete.php?id={{id}}\">
        <input type=\"hidden\" name=\"id\" value=\"{{id}}\">
        <p class=\"text-blue-600 text-2xl mb-4\">Are you sure you want to delete this category?</p>
        <button type=\"submit\" class=\"bg-pink-600 text-white p-3 rounded-md w-1/3\">Yes</button>
        <button type=\"submit\" formaction=\"{{doc_root}}admin/categories.php\" class=\"bg-blue-500 text-white p-3 rounded-md w-1/3\">No</button>
    </form>
</main>

{% endblock %}", "admin/category-delete.html", "C:\\xampp\\htdocs\\templates\\admin\\category-delete.html");
    }
}
