<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_6dd0788c0bdfe70d7531bea1691ee795b161450c6b0a1828ee11ccb3ea9a20ea extends Twig_Template
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
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_b2e65c48de6ed3c7737f59ba3cafe539184b9efdd3b5d4d1f8f15b5b416faccf = ($context["php_version"] ?? null)) && is_string($__internal_6762061501f0825b67a0cfc3d8b934cc518dd4c9d5b78c990568ad25533dc9d1 = "5.4") && ('' === $__internal_6762061501f0825b67a0cfc3d8b934cc518dd4c9d5b78c990568ad25533dc9d1 || 0 === strpos($__internal_b2e65c48de6ed3c7737f59ba3cafe539184b9efdd3b5d4d1f8f15b5b416faccf, $__internal_6762061501f0825b67a0cfc3d8b934cc518dd4c9d5b78c990568ad25533dc9d1)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}