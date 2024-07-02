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

/* admin/articles.html */
class __TwigTemplate_6b79737ee2f6b5e04cf8899d29b83e64 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/articles.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
\t\t    ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            yield "          <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
\t\t\t";
        }
        // line 10
        yield "\t\t\t";
        if (($context["success"] ?? null)) {
            // line 11
            yield "          <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
\t\t\t";
        }
        // line 13
        yield "        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/article.php\">Add a new Article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            yield "            <tr class=\"bg-white border-b dark:bg-gray-800\">
                <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\"><img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 31));
            yield "\"
                                                                                       alt=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_alt", [], "any", false, false, false, 32), "html", null, true);
            yield "\"/></td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 34));
            yield "
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 37));
            yield "
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 40));
            yield "
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 43)) ? ("Yes ") : ("No "));
            yield "
                </td>
                <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                            href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46));
            yield "\">Edit</a>
                </td>
                <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                            href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "admin/article-delete.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49));
            yield "\">Delete</a>
                </td>
            </tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "admin/articles.html";
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
        return array (  156 => 53,  144 => 49,  136 => 46,  130 => 43,  124 => 40,  118 => 37,  112 => 34,  107 => 32,  101 => 31,  98 => 30,  94 => 29,  76 => 14,  73 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
\t\t    {% if error %}
          <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
\t\t\t{% endif %}
\t\t\t{% if success %}
          <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success}}</p>
\t\t\t{% endif %}
        <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"{{doc_root}}admin/article.php\">Add a new Article</a></button>
    </header>
    <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
        <thead class=\"text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 \">
        <tr>
            <th class=\"px-6 py-3\">Image</th>
            <th class=\"px-6 py-3\">Title</th>
            <th class=\"px-6 py-3\">Created</th>
            <th class=\"px-6 py-3\">Category</th>
            <th class=\"px-6 py-3\">Published</th>
            <th class=\"px-6 py-3\">Edit</th>
            <th class=\"px-6 py-3\">Delete</th>
        </tr>
        </thead>
        <tbody>
\t\t\t\t{% for article in articles %}
            <tr class=\"bg-white border-b dark:bg-gray-800\">
                <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\"><img src=\"{{doc_root}}uploads/{{article.image_file|e}}\"
                                                                                       alt=\"{{article.image_alt}}\"/></td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t{{article.title|e}}
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t{{article.created|e}}
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t{{article.category|e}}
                </td>
                <td class=\"px-6 py-4 font-medium text-gray-800 whitespace-nowrap\">
\t\t\t\t\t\t\t\t\t{{ article.published ? 'Yes ' : 'No ' }}
                </td>
                <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a
                            href=\"{{doc_root}}admin/article.php?id={{article.id|e}}\">Edit</a>
                </td>
                <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a
                            href=\"{{doc_root}}admin/article-delete.php?id={{article.id|e}}\">Delete</a>
                </td>
            </tr>
\t\t\t\t{% endfor %}
        </tbody>
    </table>
</main>
{% endblock %}", "admin/articles.html", "C:\\xampp\\htdocs\\templates\\admin\\articles.html");
    }
}
