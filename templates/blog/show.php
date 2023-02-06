{%extends '/inc/base.html'%}
{% block contenido %}
<h1>Lista de posteos</h1>
<hr>
<h2>
    {{post.pos_name}}
</h2>
<p>
    {{post.pos_body}}
</p>
<hr>
{% endblock %}