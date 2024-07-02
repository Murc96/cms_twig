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

/* admin/article.html */
class __TwigTemplate_51bf05d04d8567b75cfde432185ddc40 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">";
        // line 5
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 5)) ? ("Edit") : ("New"));
        yield "Article</h2>
\t";
        // line 6
        if (($context["errors"] ?? null)) {
            // line 7
            yield "      <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 7), "html", null, true);
            yield "</p>
\t";
        }
        // line 9
        yield "    <form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/article.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null));
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input type=\"text\" id=\"title\" name=\"title\" value=\"<?= e( \$article['title'] ) ?>\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\"><?= \$errors['title'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea id=\"summary\" name=\"summary\"
                      class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"><?= e( \$article['summary'] ) ?></textarea>
            <span class=\"text-red-500\"><?= \$errors['summary'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea id=\"content\" rows=\"10\" name=\"content\"
                      class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"><?= \$article['content'] ?></textarea>
            <span class=\"text-red-500\"><?= \$errors['content'] ?></span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select id=\"category\" name=\"category\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option>select category</option>
\t\t\t\t\t\t\t<?php foreach ( \$categories as \$category ): ?>
                  <option value=\"<?= \$category['id'] ?>\" <?= \$category['id'] === \$article['category_id'] ? 'selected' : '' ?>><?= e( \$category['name'] ) ?></option>
\t\t\t\t\t\t\t<?php endforeach; ?>
            </select>
            <span class=\"text-red-500\"><?= \$errors['category'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select id=\"user_id\" name=\"user\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option>select user</option>
\t\t\t\t\t\t\t<?php foreach ( \$users as \$user ): ?>
                  <option value=\"<?= \$user['id'] ?>\" <?= \$user['id'] === \$article['user_id'] ? 'selected' : '' ?>><?= e( \$user['forename'] ) ?> <?= e( \$user['surname'] ) ?></option>
\t\t\t\t\t\t\t<?php endforeach; ?>
            </select>
            <span class=\"text-red-500\"><?= \$errors['user'] ?></span>
\t\t\t\t\t<?php if ( ! \$article['image_file'] ) : ?>
              <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"image_file pt-2\">Image</label>
              <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\"
                     class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
              <span class=\"text-red-500\"><?= \$errors['image_file'] ?></span>
\t\t\t\t\t<?php else: ?>
              <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "uploads/<?= e( \$article['image_file'] ) ?>\" alt=\"<?= e( \$article['image_alt'] ) ?>\" class=\"w-full h-auto\"/>
              <span>Alt Text: <?= e( \$article['image_alt'] ) ?></span>
              <a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/alt-text-edit.php?id=<?= e( \$article['id'] ) ?>\" class=\"text-blue-500\">Edit Alt Text</a>
              <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/img-delete.php?id=<?= e( \$article['id'] ) ?>\" class=\"text-red-500\">Delete Image</a>
\t\t\t\t\t<?php endif; ?>

            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"<?= e( \$article['alttext'] ?? '' ) ?>\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\"><?= \$errors['image_alt'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            <input type=\"checkbox\" id=\"published\" name=\"published\" <?= \$article['published'] ? 'checked' : '' ?>
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\">
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
    </form>
</main>

<script>
\ttinymce.init({
\t\tselector: '#content',
\t\tmenubar: false,
\t\ttoolbar: 'bold italic underline link',
\t\tplugins: 'link',
\t\tlink_title: false
\t})
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article.html";
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
        return array (  121 => 52,  117 => 51,  112 => 49,  66 => 9,  60 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block content %}
<main class=\"p-10\">
    <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">{{article.id ? 'Edit': 'New'}}Article</h2>
\t{% if errors %}
      <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
\t{% endif %}
    <form action=\"{{doc_root}}admin/article.php?id={{id|e}}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
            <input type=\"text\" id=\"title\" name=\"title\" value=\"<?= e( \$article['title'] ) ?>\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\"><?= \$errors['title'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
            <textarea id=\"summary\" name=\"summary\"
                      class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"><?= e( \$article['summary'] ) ?></textarea>
            <span class=\"text-red-500\"><?= \$errors['summary'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>
            <textarea id=\"content\" rows=\"10\" name=\"content\"
                      class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"><?= \$article['content'] ?></textarea>
            <span class=\"text-red-500\"><?= \$errors['content'] ?></span>
        </div>
        <div>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
            <select id=\"category\" name=\"category\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option>select category</option>
\t\t\t\t\t\t\t<?php foreach ( \$categories as \$category ): ?>
                  <option value=\"<?= \$category['id'] ?>\" <?= \$category['id'] === \$article['category_id'] ? 'selected' : '' ?>><?= e( \$category['name'] ) ?></option>
\t\t\t\t\t\t\t<?php endforeach; ?>
            </select>
            <span class=\"text-red-500\"><?= \$errors['category'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
            <select id=\"user_id\" name=\"user\"
                    class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                <option>select user</option>
\t\t\t\t\t\t\t<?php foreach ( \$users as \$user ): ?>
                  <option value=\"<?= \$user['id'] ?>\" <?= \$user['id'] === \$article['user_id'] ? 'selected' : '' ?>><?= e( \$user['forename'] ) ?> <?= e( \$user['surname'] ) ?></option>
\t\t\t\t\t\t\t<?php endforeach; ?>
            </select>
            <span class=\"text-red-500\"><?= \$errors['user'] ?></span>
\t\t\t\t\t<?php if ( ! \$article['image_file'] ) : ?>
              <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"image_file pt-2\">Image</label>
              <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\"
                     class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
              <span class=\"text-red-500\"><?= \$errors['image_file'] ?></span>
\t\t\t\t\t<?php else: ?>
              <img src=\"{{doc_root}}uploads/<?= e( \$article['image_file'] ) ?>\" alt=\"<?= e( \$article['image_alt'] ) ?>\" class=\"w-full h-auto\"/>
              <span>Alt Text: <?= e( \$article['image_alt'] ) ?></span>
              <a href=\"{{doc_root}}admin/alt-text-edit.php?id=<?= e( \$article['id'] ) ?>\" class=\"text-blue-500\">Edit Alt Text</a>
              <a href=\"{{doc_root}}admin/img-delete.php?id=<?= e( \$article['id'] ) ?>\" class=\"text-red-500\">Delete Image</a>
\t\t\t\t\t<?php endif; ?>

            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
            <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"<?= e( \$article['alttext'] ?? '' ) ?>\"
                   class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
            <span class=\"text-red-500\"><?= \$errors['image_alt'] ?></span>
            <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
            <input type=\"checkbox\" id=\"published\" name=\"published\" <?= \$article['published'] ? 'checked' : '' ?>
                   class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\">
        </div>
        <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
    </form>
</main>

<script>
\ttinymce.init({
\t\tselector: '#content',
\t\tmenubar: false,
\t\ttoolbar: 'bold italic underline link',
\t\tplugins: 'link',
\t\tlink_title: false
\t})
</script>

{% endblock %}", "admin/article.html", "C:\\xampp\\htdocs\\templates\\admin\\article.html");
    }
}
