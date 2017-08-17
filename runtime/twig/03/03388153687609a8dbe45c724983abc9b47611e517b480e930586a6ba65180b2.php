<?php

/* repair/repair.html */
class __TwigTemplate_5dd79fe6024bbeea6d1408667f5e3bcbffeb5fbfe64586a807e0e92e4e7b2459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("public/base.html", "repair/repair.html", 1);
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
      <div class=\"boxes\">
        <h2>why us importance of repair</h2>
        <div class=\"repair\">
          <section>
            <ul class=\"lb-album\">
              <li> <a href=\"#image-1\"> <img src=\"/static/index/images/r_pic1.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-1\"> <img src=\"/static/index/images/r_pic1.jpg\" alt=\"\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-2\"> <img src=\"/static/index/images/r_pic2.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-2\"> <img src=\"/static/index/images/r_pic2.jpg\" alt=\"\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-3\"> <img src=\"/static/index/images/r_pic3.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-3\"> <img src=\"/static/index/images/r_pic3.jpg\" alt=\"image03\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-4\"> <img src=\"/static/index/images/r_pic4.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-4\"> <img src=\"/static/index/images/r_pic4.jpg\" alt=\"image04\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
            </ul>
          </section>
        </div>
        <div class=\"repair\">
          <section>
            <ul class=\"lb-album\">
              <li> <a href=\"#image-5\"> <img src=\"/static/index/images/r_pic5.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-5\"> <img src=\"/static/index/images/r_pic5.jpg\" alt=\"image05\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-6\"> <img src=\"/static/index/images/r_pic6.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-6\"> <img src=\"/static/index/images/r_pic6.jpg\" alt=\"image06\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-7\"> <img src=\"/static/index/images/r_pic7.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-7\"> <img src=\"/static/index/images/r_pic7.jpg\" alt=\"image07\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-8\"> <img src=\"/static/index/images/r_pic8.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-8\"> <img src=\"/static/index/images/r_pic8.jpg\" alt=\"image08\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <div class=\"clear\"></div>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "repair/repair.html";
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
      <div class=\"boxes\">
        <h2>why us importance of repair</h2>
        <div class=\"repair\">
          <section>
            <ul class=\"lb-album\">
              <li> <a href=\"#image-1\"> <img src=\"/static/index/images/r_pic1.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-1\"> <img src=\"/static/index/images/r_pic1.jpg\" alt=\"\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-2\"> <img src=\"/static/index/images/r_pic2.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-2\"> <img src=\"/static/index/images/r_pic2.jpg\" alt=\"\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-3\"> <img src=\"/static/index/images/r_pic3.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-3\"> <img src=\"/static/index/images/r_pic3.jpg\" alt=\"image03\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-4\"> <img src=\"/static/index/images/r_pic4.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-4\"> <img src=\"/static/index/images/r_pic4.jpg\" alt=\"image04\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
            </ul>
          </section>
        </div>
        <div class=\"repair\">
          <section>
            <ul class=\"lb-album\">
              <li> <a href=\"#image-5\"> <img src=\"/static/index/images/r_pic5.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-5\"> <img src=\"/static/index/images/r_pic5.jpg\" alt=\"image05\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-6\"> <img src=\"/static/index/images/r_pic6.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-6\"> <img src=\"/static/index/images/r_pic6.jpg\" alt=\"image06\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-7\"> <img src=\"/static/index/images/r_pic7.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-7\"> <img src=\"/static/index/images/r_pic7.jpg\" alt=\"image07\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <li> <a href=\"#image-8\"> <img src=\"/static/index/images/r_pic8.jpg\" alt=\"\"> <span> </span> </a>
                <div class=\"lb-overlay\" id=\"image-8\"> <img src=\"/static/index/images/r_pic8.jpg\" alt=\"image08\"> <a href=\"#page\" class=\"lb-close\"> </a> </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                <div class=\"rd_more\"> <a href=\"details.html\" class=\"button button-rounded\">Read More</a> </div>
              </li>
              <div class=\"clear\"></div>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "repair/repair.html", "/Users/qiuzhiwei/Documents/web/coer/app/view/repair/repair.html");
    }
}
