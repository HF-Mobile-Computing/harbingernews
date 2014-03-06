json.articles @articles do |article|
   json.time article.created_at
   json.title article.title
   json.body strip_tags(article.body)
   json.author article.author
   json.category article.category
end