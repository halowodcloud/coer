<?php

/* login/login.html */
class __TwigTemplate_88d0179bfaa88302a12432858ff93662b7f2320afa8c606a91d6ed412262f100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "login/login.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "public/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main\">
    <div class=\"main1\">
        ";
        // line 6
        if (($this->getAttribute(($context["is_login"] ?? null), "is_login", array()) == "1")) {
            // line 7
            echo "        <form class=\"form-4\" method=\"post\" action=\"/login/logout\">
            <h1 style=\"text-align: center\">Welcome ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["is_login"] ?? null), "username", array()), "html", null, true);
            echo "</h1>
            <p>
                <input type=\"submit\" name=\"submit\" value=\"Log out\" style=\"color: skyblue;\">
            </p>

            <input type=\"hidden\" name=\"username\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["is_login"] ?? null), "username", array()), "html", null, true);
            echo "\">
        </form>
        ";
        } else {
            // line 16
            echo "        <form class=\"form-4\" method=\"post\" action=\"/login/login\">
            <h1>Login Or Register</h1>
            <p>
                <label for=\"login\">Username or email</label>
                <input type=\"text\" name=\"username\" placeholder=\"Username or email\" required autofocus>
            </p>
            <p>
                <label for=\"password\">Password</label>
                <input type=\"password\" name='password' placeholder=\"Password\" required>
            </p>
            <p>
                <input type=\"submit\" name=\"submit\" value=\"Log in\">
            </p>
        </form>
        ​";
        }
        // line 31
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  54 => 16,  48 => 13,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"public/base.html\" %}

{% block content %}
<div class=\"main\">
    <div class=\"main1\">
        {% if is_login.is_login == '1' %}
        <form class=\"form-4\" method=\"post\" action=\"/login/logout\">
            <h1 style=\"text-align: center\">Welcome {{is_login.username}}</h1>
            <p>
                <input type=\"submit\" name=\"submit\" value=\"Log out\" style=\"color: skyblue;\">
            </p>

            <input type=\"hidden\" name=\"username\" value=\"{{is_login.username}}\">
        </form>
        {% else %}
        <form class=\"form-4\" method=\"post\" action=\"/login/login\">
            <h1>Login Or Register</h1>
            <p>
                <label for=\"login\">Username or email</label>
                <input type=\"text\" name=\"username\" placeholder=\"Username or email\" required autofocus>
            </p>
            <p>
                <label for=\"password\">Password</label>
                <input type=\"password\" name='password' placeholder=\"Password\" required>
            </p>
            <p>
                <input type=\"submit\" name=\"submit\" value=\"Log in\">
            </p>
        </form>
        ​{% endif %}
    </div>
</div>
{% endblock %}", "login/login.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/login/login.html");
    }
}
