<?php

/* maintain/maintain.html */
class __TwigTemplate_a3dd3a1461118f199795ee9653234a49a2a767fda974eb88c4d9c1d10303ac0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "maintain/maintain.html", 1);
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
      <h2 class=\"hdr_s\">Why us importance of maintaince</h2>
      <div class=\"image group\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/8.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"image group\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/2.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"image group1\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/3.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "maintain/maintain.html";
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
      <h2 class=\"hdr_s\">Why us importance of maintaince</h2>
      <div class=\"image group\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/8.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"image group\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/2.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
      <div class=\"image group1\">
        <div class=\"images_2_of_2\"> <a href=\"details.html\"> <img src=\"/static/index/images/3.jpg\" alt=\"\"></a> </div>
        <div class=\"span_2_of_2\">
          <h3>Lorem Ipsum is simply dummy text </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
        </div>
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
{% endblock %}", "maintain/maintain.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/maintain/maintain.html");
    }
}
