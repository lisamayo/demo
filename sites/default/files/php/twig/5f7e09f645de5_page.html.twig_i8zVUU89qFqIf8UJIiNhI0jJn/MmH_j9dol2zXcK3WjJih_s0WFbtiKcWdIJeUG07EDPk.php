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

/* themes/custom/substable/templates/layout/page.html.twig */
class __TwigTemplate_f3bdbe40150aaf2fb51370ebe98744d68182425a9b8442476bdfe549725b5f9a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 60];
        $filters = ["escape" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
        // line 46
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </header>


  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 55
        echo "
    <div class=\"layout-content\">
      ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 59
        echo "
    ";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
            // line 61
            echo "      <aside class=\"layout-sidebar-left\" role=\"complementary\">
        ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
            // line 67
            echo "      <aside class=\"layout-sidebar-right\" role=\"complementary\">
        ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 71
        echo "
  </main>

  ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 75
            echo "    <footer role=\"contentinfo\">
      ";
            // line 76
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 79
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/substable/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 79,  114 => 76,  111 => 75,  109 => 74,  104 => 71,  98 => 68,  95 => 67,  93 => 66,  90 => 65,  84 => 62,  81 => 61,  79 => 60,  76 => 59,  72 => 57,  68 => 55,  60 => 49,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/substable/templates/layout/page.html.twig", "/Users/lisamayo/sites/devdesktop/lisam-substable/themes/custom/substable/templates/layout/page.html.twig");
    }
}
