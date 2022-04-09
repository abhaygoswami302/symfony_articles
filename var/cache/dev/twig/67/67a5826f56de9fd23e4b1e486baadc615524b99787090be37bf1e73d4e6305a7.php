<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* post/index.html.twig */
class __TwigTemplate_1c6c364431f9a1018bc4c01df54a6e117268fcc7c3e8e2982c91bcd3c2614f53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Posts";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"col-sm-8 offset-2 mt-4\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h2 class=\"p-2\">List of all posts</h2>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.create");
        echo "\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/ejxwvtlg.json\"
                        trigger=\"loop\"
                        delay=\"5000\"
                        style=\"width:40px;height:40px\">
                    </lord-icon>
                </a>
            </div>
        </div>
        
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "            <div class=\"alert alert-success\">
                ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        <table class=\"table table-striped table-hover mb-4\" style=\"background:#f8f9f4;border:1px solid lightgray;\">
            <thead>
                <tr>
                <th scope=\"col\">#ID</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 39
            echo "                <tr>
                <th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</th>
                <td>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "
                </td>
                <td>

                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/mrjuyheh.json\"
                        trigger=\"loop\"
                        style=\"width:32px;height:32px\">
                    </lord-icon>
                </a>

                <lord-icon
                    src=\"https://cdn.lordicon.com/alzqexpi.json\"
                    trigger=\"loop\"
                    delay=\"3000\"
                    style=\"width:32px;height:32px;cursor:pointer\">
                </lord-icon>

                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/exkbusmy.json\"
                        trigger=\"loop\"
                        delay=\"2000\"
                        style=\"width:32px;height:32px;cursor:pointer\">
                    </lord-icon>
                </a>
                </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </tbody>
        </table>
    </div>
    <div class=\"col-sm-2\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 72,  175 => 61,  157 => 46,  150 => 42,  145 => 40,  142 => 39,  138 => 38,  126 => 28,  117 => 25,  114 => 24,  110 => 23,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Posts{% endblock %}

{% block body %}
    <div class=\"col-sm-8 offset-2 mt-4\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h2 class=\"p-2\">List of all posts</h2>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"{{ path('post.create') }}\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/ejxwvtlg.json\"
                        trigger=\"loop\"
                        delay=\"5000\"
                        style=\"width:40px;height:40px\">
                    </lord-icon>
                </a>
            </div>
        </div>
        
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        <table class=\"table table-striped table-hover mb-4\" style=\"background:#f8f9f4;border:1px solid lightgray;\">
            <thead>
                <tr>
                <th scope=\"col\">#ID</th>
                <th scope=\"col\">Title</th>
                <th scope=\"col\">Action</th>
                </tr>
            </thead>
            <tbody>
                {% for post in posts %}
                <tr>
                <th scope=\"row\">{{ post.id }}</th>
                <td>
                    {{ post.title }}
                </td>
                <td>

                <a href=\"{{ path('post.show', {id: post.id}) }}\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/mrjuyheh.json\"
                        trigger=\"loop\"
                        style=\"width:32px;height:32px\">
                    </lord-icon>
                </a>

                <lord-icon
                    src=\"https://cdn.lordicon.com/alzqexpi.json\"
                    trigger=\"loop\"
                    delay=\"3000\"
                    style=\"width:32px;height:32px;cursor:pointer\">
                </lord-icon>

                <a href=\"{{ path('post.delete', {id: post.id}) }}\">
                    <lord-icon
                        src=\"https://cdn.lordicon.com/exkbusmy.json\"
                        trigger=\"loop\"
                        delay=\"2000\"
                        style=\"width:32px;height:32px;cursor:pointer\">
                    </lord-icon>
                </a>
                </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"col-sm-2\"></div>
{% endblock %}
", "post/index.html.twig", "C:\\xampp\\htdocs\\symfonyArticles\\templates\\post\\index.html.twig");
    }
}
