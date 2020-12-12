
    
          <div class="row">
            <div class="col-xs-12">
              <form name="comment" action="?controller=blog&action=Ajouter" method="POST" role="form" class="commentsForm">
                <h3>Leave Comments</h3>
                <div class="row">
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="in2" id="" placeholder="Name" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" name="in1" class="form-control" id="" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" name="in3" rows="3" placeholder="Comment" required></textarea>
                    </div>
                  </div>

                </div>
                <button type="submit" class="btn btn-primary">post comment</button>
              </form>
            </div>
          </div>
       