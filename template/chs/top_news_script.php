<script type="text/template" id="tpl-list">
		<h2><img src="/assets/chs/images/pc/top/ttl_news.png" alt="NEWS"></h2>
        <% if (data.contents.length > 0) { %>
            <ul class="news-list">
                <% _.each(data.contents, function(val, index) { %>
                    <li>
                        <a href="/chs/news/detail/<%= val.article_id %>">
                            <% if (val.image_path) { %>
                                <img class="imt-thumb" src="<%= val.image_path %>" alt="">
                            <% } else if (val.pr_thumb_type) { %>
                                <img class="imt-thumb" src="/assets/chs/images/common/thumb_child_category<%= val.pr_thumb_type %>.png" alt="">
                            <% } else if (val.pr_category_id) { %>
                                <img class="imt-thumb" src="/assets/chs/images/common/thumb_category<%= val.pr_category_id %>.png" alt="">
                            <% } %>
                            <div class="time">
                                <%= window.moment.unix(val.date).format('lll') %>
                                <span class="icon-category<%= val.pr_category_id %>"><%= val.category_name %></span>
                            </div>
                            <p class="title">
                                <%= val.title_name %>
                            </p>
                            <% if (flagArray[index].new) { %>
                                <span class="icon is_new"></span>
                            <% } else if (flagArray[index].update && flagArray[index].new == false) { %>
                                <span class="icon is_update"></span>
                            <% } %>
                        </a>
                    </li>
                <% }); %>
            </ul>
        <% } else { %>
            <div id="no-posts">暂无新闻。</div>
        <% } %>
    </script>