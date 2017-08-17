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
        echo "  <div class=\"main\">
    <div class=\"main1\">
      <form class=\"form-4\">
        <h1>Login or Register</h1>
        <p>
          <label for=\"login\">Username or email</label>
          <input type=\"text\" name=\"login\" placeholder=\"Username or email\" required>
        </p>
        <p>
          <label for=\"password\">Password</label>
          <input type=\"password\" name='password' placeholder=\"Password\" required>
        </p>
        <p>
          <input type=\"submit\" name=\"submit\" value=\"Continue\">
        </p>
      </form>
​​       </div>
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
      <form class=\"form-4\">
        <h1>Login or Register</h1>
        <p>
          <label for=\"login\">Username or email</label>
          <input type=\"text\" name=\"login\" placeholder=\"Username or email\" required>
        </p>
        <p>
          <label for=\"password\">Password</label>
          <input type=\"password\" name='password' placeholder=\"Password\" required>
        </p>
        <p>
          <input type=\"submit\" name=\"submit\" value=\"Continue\">
        </p>
      </form>
​​       </div>
  </div>
{% endblock %}", "login/login.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/login/login.html");
    }
}
