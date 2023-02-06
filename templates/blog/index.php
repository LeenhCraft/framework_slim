{%extends '/inc/base.html'%}
{% block contenido %}
<h1>Lista de posteos</h1>
<hr>
{% for post in posts %}
<h2>{{post.pos_name}}</h2>
<p>{{post.pos_body}}</p>
<a href="/blog/{{post.idpost}}">Leer más</a>
<hr>
{% endfor %}
{% endblock %}