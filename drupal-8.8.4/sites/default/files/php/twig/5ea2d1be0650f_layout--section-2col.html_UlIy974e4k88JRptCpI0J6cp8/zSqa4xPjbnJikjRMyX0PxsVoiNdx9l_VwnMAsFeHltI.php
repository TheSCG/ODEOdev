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

/* themes/custom/bootstrap_odeo/templates/custom/layout--section-2col.html.twig */
class __TwigTemplate_f336c5b6bd8f6a9fab41368b79dfe953378b77826acce9f059197106e930b44c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14, "set" => 15];
        $filters = ["render" => 14, "escape" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['render', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "

";
        // line 14
        if (((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["top"] ?? null)) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["col_1"] ?? null))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["col_2"] ?? null))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["bottom"] ?? null)))) {
            // line 15
            $context["row_classes"] = [0 => "col-md"];
            // line 16
            echo "  <";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">

";
            // line 18
            if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
                // line 19
                echo "<div class=\"row mb-3\">
<";
                // line 20
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_wrapper"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_attributes"] ?? null)), "html", null, true);
                echo ">
  <div class=\"row mb-3\">
  ";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
                echo "
  </div>
</";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_wrapper"] ?? null)), "html", null, true);
                echo ">
</div>
";
            }
            // line 27
            echo "
     <div class=\"row mb-3\">
      ";
            // line 29
            if ($this->getAttribute(($context["content"] ?? null), "col_1", [])) {
                // line 30
                echo "        <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_1_wrapper"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["col_1_attributes"] ?? null), "addClass", [0 => "col-sm-8"], "method")), "html", null, true);
                echo ">
          <div";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_attributes"] ?? null), "col_1", [])), "html", null, true);
                echo ">
            ";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "col_1", [])), "html", null, true);
                echo "
          </div>
        </";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_1_wrapper"] ?? null)), "html", null, true);
                echo ">
      ";
            }
            // line 36
            echo "      ";
            if ($this->getAttribute(($context["content"] ?? null), "col_2", [])) {
                // line 37
                echo "        <";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_2_wrapper"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["col_2_attributes"] ?? null), "addClass", [0 => "col-sm-4"], "method")), "html", null, true);
                echo ">
          <div";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["region_attributes"] ?? null), "col_2", [])), "html", null, true);
                echo ">
            ";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "col_2", [])), "html", null, true);
                echo "
          </div>
        </";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_2_wrapper"] ?? null)), "html", null, true);
                echo ">
      ";
            }
            // line 43
            echo "    </div>

";
            // line 45
            if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
                // line 46
                echo "<";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_wrapper"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_attributes"] ?? null)), "html", null, true);
                echo ">
  <div class=\"row mb-3\">
  ";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
                echo "
  </div>
</";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_wrapper"] ?? null)), "html", null, true);
                echo ">
";
            }
            // line 52
            echo "

</";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_odeo/templates/custom/layout--section-2col.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  164 => 52,  159 => 50,  154 => 48,  147 => 46,  145 => 45,  141 => 43,  136 => 41,  131 => 39,  127 => 38,  121 => 37,  118 => 36,  113 => 34,  108 => 32,  104 => 31,  98 => 30,  96 => 29,  92 => 27,  86 => 24,  81 => 22,  75 => 20,  72 => 19,  70 => 18,  63 => 16,  61 => 15,  59 => 14,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Two Column Layout
 *
 * Available variables:
 * - col_1
 * - col_2
 *
 */
#}


{% if top|render or col_1|render or col_2|render or bottom|render %}
{% set row_classes = [ 'col-md' ] %}
  <{{ outer_wrapper }}{{ attributes }}>

{% if content.top %}
<div class=\"row mb-3\">
<{{ top_wrapper }}{{ top_attributes }}>
  <div class=\"row mb-3\">
  {{ content.top }}
  </div>
</{{ top_wrapper }}>
</div>
{% endif %}

     <div class=\"row mb-3\">
      {% if content.col_1 %}
        <{{ col_1_wrapper }}{{ col_1_attributes.addClass('col-sm-8') }}>
          <div{{ region_attributes.col_1 }}>
            {{ content.col_1 }}
          </div>
        </{{ col_1_wrapper }}>
      {% endif %}
      {% if content.col_2 %}
        <{{ col_2_wrapper }}{{ col_2_attributes.addClass('col-sm-4') }}>
          <div{{ region_attributes.col_2 }}>
            {{ content.col_2 }}
          </div>
        </{{ col_2_wrapper }}>
      {% endif %}
    </div>

{% if content.bottom %}
<{{ bottom_wrapper }}{{ bottom_attributes }}>
  <div class=\"row mb-3\">
  {{ content.bottom }}
  </div>
</{{ bottom_wrapper }}>
{% endif %}


</{{ outer_wrapper }}>
{% endif %}
", "themes/custom/bootstrap_odeo/templates/custom/layout--section-2col.html.twig", "C:\\Users\\kstringer\\Sites\\devdesktop\\drupal-8.8.4\\themes\\custom\\bootstrap_odeo\\templates\\custom\\layout--section-2col.html.twig");
    }
}
