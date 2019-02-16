<?php

/* family/stats.html.twig */
class __TwigTemplate_5442637c59d7f78a1bded94e4bd4b06e5cbb8f6c57813e5977b667ea69f812b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("family/layout_pdf.html.twig", "family/stats.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "family/layout_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/stats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $context["now"] = twig_date_format_filter($this->env, "now", "Y");
        // line 5
        echo "    ";
        $context["months"] = twig_date_format_filter($this->env, "now", "m");
        // line 6
        echo "
    <h3>Najpopularniejsze imiona wśród dzieci</h3>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mostOccurrencesChildNames"] ?? $this->getContext($context, "mostOccurrencesChildNames")));
        foreach ($context['_seq'] as $context["_key"] => $context["mostOccurrencesChildName"]) {
            // line 9
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostOccurrencesChildName"], "name", array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mostOccurrencesChildName"], "count", array(), "array"), "html", null, true);
            echo " times</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostOccurrencesChildName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <h3>Średni wiek dzieci</h3>
    <h4>";
        // line 13
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["ageAvg"] ?? $this->getContext($context, "ageAvg")), "childAvg", array(), "array"), 2, "."), "html", null, true);
        echo "</h4>

    <h3>Średni wiek rodziców</h3>
    <h4>Father: ";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["ageAvg"] ?? $this->getContext($context, "ageAvg")), "fatherAvg", array(), "array"), 2, "."), "html", null, true);
        echo "</h4>
    <h4>Mother: ";
        // line 17
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["ageAvg"] ?? $this->getContext($context, "ageAvg")), "motherAvg", array(), "array"), 2, "."), "html", null, true);
        echo "</h4>

    <h3>Średnia liczba dzieci w rodzinie</h3>
    <h4>";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["childrenAvg"] ?? $this->getContext($context, "childrenAvg")), 2, "."), "html", null, true);
        echo "</h4>

    <h3>Lista najliczniejszych rodzin</h3>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biggestFamilies"] ?? $this->getContext($context, "biggestFamilies")));
        foreach ($context['_seq'] as $context["_key"] => $context["biggestFamily"]) {
            // line 24
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["biggestFamily"], "family_name", array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["biggestFamily"], "count", array(), "array"), "html", null, true);
            echo " persons</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biggestFamily'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    <h3>The Oldest Fathers</h3>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oldestFathers"] ?? $this->getContext($context, "oldestFathers")));
        foreach ($context['_seq'] as $context["_key"] => $context["oldestFather"]) {
            // line 29
            echo "        ";
            $context["fatherYear"] = twig_date_format_filter($this->env, $this->getAttribute($context["oldestFather"], "fatherDateOfBirth", array(), "array"), "Y");
            // line 30
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oldestFather"], "fatherName", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($context["now"] ?? $this->getContext($context, "now")) - ($context["fatherYear"] ?? $this->getContext($context, "fatherYear"))), "html", null, true);
            echo " years</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oldestFather'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <h3>The Oldest Mothers</h3>
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["oldestMothers"] ?? $this->getContext($context, "oldestMothers")));
        foreach ($context['_seq'] as $context["_key"] => $context["oldestMother"]) {
            // line 35
            echo "        ";
            $context["motherYear"] = twig_date_format_filter($this->env, $this->getAttribute($context["oldestMother"], "motherDateOfBirth", array(), "array"), "Y");
            // line 36
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oldestMother"], "motherName", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($context["now"] ?? $this->getContext($context, "now")) - ($context["motherYear"] ?? $this->getContext($context, "motherYear"))), "html", null, true);
            echo " years</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oldestMother'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    <h3>The Youngest Children</h3>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["youngestChildren"] ?? $this->getContext($context, "youngestChildren")));
        foreach ($context['_seq'] as $context["_key"] => $context["youngestChild"]) {
            // line 41
            echo "        ";
            $context["childYear"] = twig_date_format_filter($this->env, $this->getAttribute($context["youngestChild"], "dateOfBirth", array(), "array"), "m");
            // line 42
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["youngestChild"], "name", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($context["months"] ?? $this->getContext($context, "months")) - ($context["childYear"] ?? $this->getContext($context, "childYear"))), "html", null, true);
            echo " months</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youngestChild'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    <hr/>
    ";
        // line 45
        if (array_key_exists("form", $context)) {
            // line 46
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 50
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "family/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 50,  195 => 48,  191 => 47,  186 => 46,  184 => 45,  181 => 44,  170 => 42,  167 => 41,  163 => 40,  159 => 38,  148 => 36,  145 => 35,  141 => 34,  137 => 32,  126 => 30,  123 => 29,  119 => 28,  115 => 26,  104 => 24,  100 => 23,  94 => 20,  88 => 17,  84 => 16,  78 => 13,  74 => 11,  63 => 9,  59 => 8,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'family/layout_pdf.html.twig' %}

{% block content %}
    {% set now =  'now'|date('Y') %}
    {% set months =  'now'|date('m') %}

    <h3>Najpopularniejsze imiona wśród dzieci</h3>
    {% for mostOccurrencesChildName in mostOccurrencesChildNames %}
    <h4>{{ mostOccurrencesChildName['name'] }} - {{ mostOccurrencesChildName['count'] }} times</h4>
    {% endfor %}

    <h3>Średni wiek dzieci</h3>
    <h4>{{ ageAvg['childAvg']|number_format(2, '.') }}</h4>

    <h3>Średni wiek rodziców</h3>
    <h4>Father: {{ ageAvg['fatherAvg']|number_format(2, '.') }}</h4>
    <h4>Mother: {{ ageAvg['motherAvg']|number_format(2, '.') }}</h4>

    <h3>Średnia liczba dzieci w rodzinie</h3>
    <h4>{{ childrenAvg|number_format(2, '.') }}</h4>

    <h3>Lista najliczniejszych rodzin</h3>
    {% for biggestFamily in biggestFamilies %}
        <h4>{{ biggestFamily['family_name'] }} - {{ biggestFamily['count'] }} persons</h4>
    {% endfor %}

    <h3>The Oldest Fathers</h3>
    {% for oldestFather in oldestFathers %}
        {% set fatherYear = oldestFather['fatherDateOfBirth']|date('Y') %}
        <h4>{{ oldestFather['fatherName'] }} {{ now - fatherYear }} years</h4>
    {% endfor %}

    <h3>The Oldest Mothers</h3>
    {% for oldestMother in oldestMothers %}
        {% set motherYear = oldestMother['motherDateOfBirth']|date('Y') %}
        <h4>{{ oldestMother['motherName'] }} {{ now - motherYear }} years</h4>
    {% endfor %}

    <h3>The Youngest Children</h3>
    {% for youngestChild in youngestChildren %}
        {% set childYear = youngestChild['dateOfBirth']|date('m') %}
        <h4>{{ youngestChild['name'] }} {{ months - childYear }} months</h4>
    {% endfor %}
    <hr/>
    {% if form is defined %}
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    {% endif %}

{% endblock %}

", "family/stats.html.twig", "/home/jaca/Workspace/Symfony/project_family/app/Resources/views/family/stats.html.twig");
    }
}
