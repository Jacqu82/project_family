<?php

/* family/show.html.twig */
class __TwigTemplate_459271fe9fa7b9c9733364abd3c9c086daa31fb895dcd2b2871b38b632b2696e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "family/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["now"] = twig_date_format_filter($this->env, "now", "Y");
        // line 5
        echo "    ";
        $context["fatherYear"] = twig_date_format_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "fatherDateOfBirth", array()), "Y");
        // line 6
        echo "    ";
        $context["motherYear"] = twig_date_format_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "motherDateOfBirth", array()), "Y");
        // line 7
        echo "
    <h2><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("family_edit", array("slug" => $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "familyName", array()), "html", null, true);
        echo "</a></h2>
    <dt>Father's Name</dt>
    <dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "fatherName", array()), "html", null, true);
        echo "</dd>
    <dt>Father's Date of Birth</dt>
    <dd>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "fatherDateOfBirth", array()), "d-m-Y"), "html", null, true);
        echo "</dd>
    <dt>Father's Age</dt>
    <dd>";
        // line 14
        echo twig_escape_filter($this->env, (($context["now"] ?? $this->getContext($context, "now")) - ($context["fatherYear"] ?? $this->getContext($context, "fatherYear"))), "html", null, true);
        echo "</dd><hr/>
    <dt>Mothers's Name</dt>
    <dd>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "motherName", array()), "html", null, true);
        echo "</dd>
    <dt>Mothers's Date of Birth</dt>
    <dd>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "motherDateOfBirth", array()), "d-m-Y"), "html", null, true);
        echo "</dd>
    <dt>Mother's Age</dt>
    <dd>";
        // line 20
        echo twig_escape_filter($this->env, (($context["now"] ?? $this->getContext($context, "now")) - ($context["motherYear"] ?? $this->getContext($context, "motherYear"))), "html", null, true);
        echo "</dd><hr/>
    <dt>Children: ";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "children", array())), "html", null, true);
        echo "</dt>

    <dd>
        <ul class=\"list-group\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["family"] ?? $this->getContext($context, "family")), "children", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 26
            echo "            <li class=\"list-group-item js-children\">
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("child_show", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
            echo ",
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["child"], "dateOfBirth", array()), "d-m-Y"), "html", null, true);
            echo "</a>
            <a href=\"#\" class=\"btn btn-link btn-xs pull-left js-remove-child\"
               data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("child_remove", array("id" => $this->getAttribute($context["child"], "id", array()))), "html", null, true);
            echo "\">
                <span class=\"fa fa-close\"></span>
            </a>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <h4>No children</h4>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>
    </dd>

    <h3><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("family_stats");
        echo "\">Go to stats</a></h3>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "family/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 46,  168 => 45,  159 => 44,  146 => 40,  141 => 37,  134 => 35,  124 => 30,  119 => 28,  113 => 27,  110 => 26,  105 => 25,  98 => 21,  94 => 20,  89 => 18,  84 => 16,  79 => 14,  74 => 12,  69 => 10,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% set now =  'now'|date('Y') %}
    {% set fatherYear = family.fatherDateOfBirth|date('Y') %}
    {% set motherYear = family.motherDateOfBirth|date('Y') %}

    <h2><a href=\"{{ path('family_edit', {slug: family.slug}) }}\">{{ family.familyName }}</a></h2>
    <dt>Father's Name</dt>
    <dd>{{ family.fatherName }}</dd>
    <dt>Father's Date of Birth</dt>
    <dd>{{ family.fatherDateOfBirth|date('d-m-Y') }}</dd>
    <dt>Father's Age</dt>
    <dd>{{ now - fatherYear }}</dd><hr/>
    <dt>Mothers's Name</dt>
    <dd>{{ family.motherName }}</dd>
    <dt>Mothers's Date of Birth</dt>
    <dd>{{ family.motherDateOfBirth|date('d-m-Y') }}</dd>
    <dt>Mother's Age</dt>
    <dd>{{ now - motherYear }}</dd><hr/>
    <dt>Children: {{ family.children|length }}</dt>

    <dd>
        <ul class=\"list-group\">
        {% for child in family.children %}
            <li class=\"list-group-item js-children\">
                <a href=\"{{ path('child_show', {id: child.id}) }}\">{{ child.name }},
                    {{ child.dateOfBirth|date('d-m-Y') }}</a>
            <a href=\"#\" class=\"btn btn-link btn-xs pull-left js-remove-child\"
               data-url=\"{{ path('child_remove', {id: child.id}) }}\">
                <span class=\"fa fa-close\"></span>
            </a>
            </li>
        {% else %}
            <h4>No children</h4>
        {% endfor %}
        </ul>
    </dd>

    <h3><a href=\"{{ path('family_stats') }}\">Go to stats</a></h3>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}

", "family/show.html.twig", "/home/jaca/Workspace/Symfony/project_family/app/Resources/views/family/show.html.twig");
    }
}
