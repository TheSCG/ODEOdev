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

/* themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig */
class __TwigTemplate_1bad5600219d9d29ede95561541f49619e56161cf03e6d4b417e564882e7b923 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 32, "set" => 34];
        $filters = ["escape" => 28, "t" => 46, "without" => 78];
        $functions = ["attach_library" => 28];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 't', 'without'],
                ['attach_library']
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
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_barrio/toast"), "html", null, true);
        echo "

<div class=\"toast-wrapper\">

  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "    ";
            // line 34
            $context["classes"] = [0 => "toast", 1 => "text-white", 2 => "fade", 3 => (((            // line 38
$context["type"] == "status")) ? ("bg-success") : ("")), 4 => (((            // line 39
$context["type"] == "warning")) ? ("bg-warning") : ("")), 5 => (((            // line 40
$context["type"] == "error")) ? ("bg-danger") : ("")), 6 => (((            // line 41
$context["type"] == "info")) ? ("bg-info") : (""))];
            // line 44
            echo "    ";
            // line 45
            $context["heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
            // line 52
            echo "    ";
            // line 53
            $context["color"] = ["status" => "#28a745", "warning" => "#dc3545", "error" => "#ffc107", "info" => "#17a2b8"];
            // line 60
            echo "    ";
            // line 61
            $context["role"] = ["status" => "status", "warning" => "alert", "error" => "alert", "info" => "info"];
            // line 68
            echo "    ";
            // line 69
            $context["autohide"] = ["status" => "true", "warning" => "false", "error" => "true", "info" => "false"];
            // line 76
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 77
                echo "      <!-- Then put toasts within -->
      <div ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-label"), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "role", 1 => $this->getAttribute(($context["role"] ?? null), $context["type"], [], "array")], "method"), "setAttribute", [0 => "data-autohide", 1 => $this->getAttribute(($context["autohide"] ?? null), $context["type"], [], "array")], "method")), "html", null, true);
                echo " aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"10000\">
        <div class=\"toast-header\">
          <svg class=\"bd-placeholder-img rounded mr-2\" width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
            <rect ";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "fill", 1 => $this->getAttribute(($context["color"] ?? null), $context["type"], [], "array")], "method")), "html", null, true);
                echo " width=\"100%\" height=\"100%\">
            </rect>
          </svg>
          <strong class=\"mr-auto\">";
                // line 84
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</strong>
          <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"toast-body\">
          ";
                // line 90
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 95,  129 => 94,  119 => 90,  110 => 84,  104 => 81,  98 => 78,  95 => 77,  90 => 76,  88 => 69,  86 => 68,  84 => 61,  82 => 60,  80 => 53,  78 => 52,  76 => 45,  74 => 44,  72 => 41,  71 => 40,  70 => 39,  69 => 38,  68 => 34,  66 => 33,  62 => 32,  55 => 28,);
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
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @see template_preprocess_status_messages()
 *
 * @ingroup themeable
 */
#}
{{ attach_library('bootstrap_barrio/toast') }}

<div class=\"toast-wrapper\">

  {% for type, messages in message_list %}
    {%
      set classes = [
        'toast',
        'text-white',
        'fade',
        type == 'status' ? 'bg-success',
        type == 'warning' ? 'bg-warning',
        type == 'error' ? 'bg-danger',
        type == 'info' ? 'bg-info',
      ]
    %}
    {%
      set heading = {
        'status': 'Status message'|t,
        'error': 'Error message'|t,
        'warning': 'Warning message'|t,
        'info': 'Informative message'|t,
      }
    %}
    {%
      set color = {
        'status': '#28a745',
        'warning': '#dc3545',
        'error': '#ffc107',
        'info': '#17a2b8',
      }
    %}
    {%
      set role = {
        'status': 'status',
        'warning': 'alert',
        'error': 'alert',
        'info': 'info',
      }
    %}
    {%
      set autohide = {
        'status': 'true',
        'warning': 'false',
        'error': 'true',
        'info': 'false',
      }
    %}
    {% for message in messages %}
      <!-- Then put toasts within -->
      <div {{ attributes|without('role', 'aria-label').addClass(classes).setAttribute('role', role[type]).setAttribute('data-autohide', autohide[type]) }} aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"10000\">
        <div class=\"toast-header\">
          <svg class=\"bd-placeholder-img rounded mr-2\" width=\"20\" height=\"20\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\">
            <rect {{ attributes.setAttribute('fill', color[type]) }} width=\"100%\" height=\"100%\">
            </rect>
          </svg>
          <strong class=\"mr-auto\">{{ status_headings[type] }}</strong>
          <button type=\"button\" class=\"ml-2 mb-1 close\" data-dismiss=\"toast\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"toast-body\">
          {{ message }}
        </div>
      </div>
    {% endfor %}
  {% endfor %}
</div>
", "themes/contrib/bootstrap_barrio/templates/misc/status-messages--toasts.html.twig", "C:\\Users\\kstringer\\Sites\\devdesktop\\drupal-8.8.4\\themes\\contrib\\bootstrap_barrio\\templates\\misc\\status-messages--toasts.html.twig");
    }
}
