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

/* admin/categories.html */
class __TwigTemplate_b7301ecdd76941450be906e4d6a3bf8d extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/categories.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
\t\t\t";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            yield "          <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
\t\t\t";
        }
        // line 9
        yield "\t\t\t";
        if (($context["success"] ?? null)) {
            // line 10
            yield "          <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
\t\t\t";
        }
        // line 12
        yield "        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "/admin/category.php\">Add a new category</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">

        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            yield "            <tr class=\"bg-white border-b dark:bg-gray-800\">
                <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                            href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "/admin/category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">Edit</a>
                </td>
                <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/category-delete.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">Delete</a>
                </td>
            </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </tbody>
    </table>
</main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/categories.html";
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
        return array (  121 => 35,  109 => 31,  102 => 29,  97 => 27,  94 => 26,  90 => 25,  75 => 13,  72 => 12,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
\t\t\t{% if error %}
          <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
\t\t\t{% endif %}
\t\t\t{% if success %}
          <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
\t\t\t{% endif %}
        <h1 class=\"text-4xl text-blue-500 mb-8\">Categories</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}/admin/category.php\">Add a new category</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">

        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Name</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
\t\t\t\t{% for category in categories %}
            <tr class=\"bg-white border-b dark:bg-gray-800\">
                <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{category.name}}</td>
                <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                            href=\"{{doc_root}}/admin/category.php?id={{category.id}}\">Edit</a>
                </td>
                <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"{{doc_root}}admin/category-delete.php?id={{category.id}}\">Delete</a>
                </td>
            </tr>
\t\t\t\t{% endfor %}
        </tbody>
    </table>
</main>
{% endblock %}", "admin/categories.html", "C:\\xampp\\htdocs\\templates\\admin\\categories.html");
    }
}
