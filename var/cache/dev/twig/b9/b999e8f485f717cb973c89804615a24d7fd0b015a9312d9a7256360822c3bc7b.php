<?php

/* family/_form.html.twig */
class __TwigTemplate_24bf4eb1a4beb00296c558855cc9ab6c02e2e64e1cf99a29bc8dcf808f7001f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "family/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context["formMacros"] = $this;
        // line 3
        echo "
";
        // line 19
        echo "
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "familyName", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fatherName", array()), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fatherDateOfBirth", array()), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motherName", array()), 'row');
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motherDateOfBirth", array()), 'row');
        echo "

    <h4>Children</h4>

    <div class=\"row js-child-wrapper\"
    data-prototype=\"";
        // line 31
        echo twig_escape_filter($this->env, $context["formMacros"]->getprintChildRow($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "vars", array()), "prototype", array())), "html_attr");
        echo "\"
    data-index=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array())), "html", null, true);
        echo "\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["childrenForm"]) {
            // line 34
            echo "        ";
            echo $context["formMacros"]->getprintChildRow($context["childrenForm"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childrenForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <a href=\"#\" class=\"js-child-add\">
            <span class=\"fa fa-plus-circle\">Add another Child</span>
        </a>
    </div>
    ";
        // line 41
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-success\" formnovalidate>Submit</button>

";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function getprintChildRow($__childrenForm__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "childrenForm" => $__childrenForm__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printChildRow"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printChildRow"));

            // line 5
            echo "    <div class=\"col-md-4 js-child-edit-form\">
        <a href=\"#\" class=\"js-remove-child-form pull-right\">
            <span class=\"fa fa-close\"></span>
        </a>
        ";
            // line 10
            echo "            ";
            // line 11
            echo "        ";
            // line 12
            echo "            ";
            // line 13
            echo "        ";
            // line 14
            echo "
        ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["childrenForm"] ?? $this->getContext($context, "childrenForm")), "name", array()), 'row');
            echo "
        ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["childrenForm"] ?? $this->getContext($context, "childrenForm")), "dateOfBirth", array()), 'row');
            echo "
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "family/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 16,  144 => 15,  141 => 14,  139 => 13,  137 => 12,  135 => 11,  133 => 10,  127 => 5,  109 => 4,  99 => 44,  92 => 41,  86 => 36,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  57 => 26,  53 => 25,  49 => 24,  45 => 23,  41 => 22,  36 => 20,  33 => 19,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% import _self as formMacros %}

{% macro printChildRow(childrenForm) %}
    <div class=\"col-md-4 js-child-edit-form\">
        <a href=\"#\" class=\"js-remove-child-form pull-right\">
            <span class=\"fa fa-close\"></span>
        </a>
        {#{% if childrenForm.family is defined %}#}
            {#{{ form_row(childrenForm.family) }}#}
        {#{% else %}#}
            {#<strong>{{ childrenForm.vars.data.family.familyName }}</strong>#}
        {#{% endif %}#}

        {{ form_row(childrenForm.name) }}
        {{ form_row(childrenForm.dateOfBirth) }}
    </div>
{% endmacro %}

{{ form_start(form) }}

    {{ form_row(form.familyName) }}
    {{ form_row(form.fatherName) }}
    {{ form_row(form.fatherDateOfBirth) }}
    {{ form_row(form.motherName) }}
    {{ form_row(form.motherDateOfBirth) }}

    <h4>Children</h4>

    <div class=\"row js-child-wrapper\"
    data-prototype=\"{{ formMacros.printChildRow(form.children.vars.prototype)|e('html_attr') }}\"
    data-index=\"{{ form.children|length }}\">
    {% for childrenForm in form.children %}
        {{ formMacros.printChildRow(childrenForm) }}
    {% endfor %}
        <a href=\"#\" class=\"js-child-add\">
            <span class=\"fa fa-plus-circle\">Add another Child</span>
        </a>
    </div>
    {# prevents weird label from showing up in new #}
    {{ form_widget(form.children) }}
    <button type=\"submit\" class=\"btn btn-success\" formnovalidate>Submit</button>

{{ form_end(form) }}", "family/_form.html.twig", "/home/jaca/Workspace/Symfony/project_family/app/Resources/views/family/_form.html.twig");
    }
}
