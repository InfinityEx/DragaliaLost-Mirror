<script type="text/template" id="tpl-news-detail">
	<div class="header">
		<ul class="category"><li class="icon-category<%= data.pr_category_id %>"><%= data.category_name %></li></ul>
		<div class="date"><%= window.moment.unix(data.start_time).format('lll') %></div>
	</div>
	<h1><%= data.title_name %></h1>
	<section class="content"><%= data.message %></section>
</script>

<script type="text/template" id="tpl-news-link">
	<div class="prev">
		<% if (data.prevArticleId) { %>
			<a href="/chs/news/detail/<%= data.prevArticleId %>" class="btn-prev">上一篇</a>
		<% } %>
	</div>
	<div class="news">
		<a href="/chs/news/" class="btn-news"><span>返回新闻一览</span></a>
	</div>
	<div class="next">
		<% if (data.nextArticleId) { %>
			<a href="/chs/news/detail/<%= data.nextArticleId %>" class="btn-next">下一篇</a>
		<% } %>
	</div>
</script>