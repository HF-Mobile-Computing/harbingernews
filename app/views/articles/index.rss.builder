xml.instruct! :xml, :version => "1.0" 
xml.rss :version => "2.0" do
  xml.channel do
    xml.title "Harbinger News Articles"
    xml.description "The official news feed of Harborfields High School"
        
    for article in @articles
      xml.item do
        xml.title article.title
        xml.description article.body
        xml.pubDate article.created_at.to_s(:rfc822)
        
      end
    end
  end
end