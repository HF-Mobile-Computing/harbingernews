class ArticlesController < ApplicationController
	def index
		@articles = Article.all(:order => "id DESC")
		@paginated_articles = Article.all(:order => "id DESC").paginate(:page => params[:page], :per_page => 3)
		@paginated_reviews = Article.where(:category => 'review').paginate(:page => params[:page], :per_page => 3)
		@paginated_clubs = Article.where(:category => 'clubs').paginate(:page => params[:page], :per_page => 3)
		@paginated_sports = Article.where(:category => 'sports').paginate(:page => params[:page], :per_page => 3)
		@paginated_print_issues = PrintIssue.all(:order => "id DESC").paginate(:page => params[:page], :per_page => 5)

		respond_to do |format|
	        format.html # index.html.erb
	        format.json { render json: @articles }
	        format.rss
	        format.xml {render xml: @articles }
      	end
	end

	def show
		@article = Article.find(params[:id])
	end

	def new
		@article = Article.new
	end

	def articles_params
		params.require(:article).permit(:title, :body)
	end

	def create
		@article = Article.new(articles_params)
    respond_to do |format|
	      if @article.save
	        format.html { redirect_to sports_url, notice: 'Article was successfully created.' }
	        format.json { render json: @article, status: :created, location: @article }
	      else
	        format.html { render action: "new" }
	        format.json { render json: @article
	        	.errors, status: :unprocessable_entity }
	      end
	    end
	end

	def edit
		@article = Article.find(params[:id])
		
	end

	def update
		@article = Article.find(params[:id])

	    respond_to do |format|
	      if @article.update_attributes(params[:article])
	        format.html { redirect_to @article, notice: 'Article was successfully updated.' }
	        format.json { head :no_content }
	      else
	        format.html { render action: "edit" }
	        format.json { render json: @article.errors, status: :unprocessable_entity }
	      end
	    end
  	end

	end

	def destroy
		@article = Article.find(params[:id])
		@article.destroy	
		redirect_to articles_path
	
	end

