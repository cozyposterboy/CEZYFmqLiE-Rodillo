<body style="background-color:#edebe8">
<div class="container">	

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:#f5d7d0;">
        <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                   <a class="nav-link" href="#"><h2><?= $title ?></h2><span class="sr-only">(current)</span></a>
                </li>
        </ul>
        <form class="form-inline" role="form" action="search.php" method="GET">
                        <div class="form-group">

                                <input type="text" name="query" placeholder="Search for games..">
                                <select class="form-control" id="FormControlSelect1" name="field">
                                      <option>Name</option>
                                      <option>Genre</option>
                                      <option>Price</option>
                                      <option>Description</option>
                                </select>
                        </div>
                <button type="submit" class="btn btn-info zoom" name="submit" >Search</button>
                <a href="<?= site_url('add')?>" class="btn btn-danger zoom" role="button">Add New</a>                
        </form>
  </div>
</nav>

<div class="row">      
                <div class="table-responsive-sm">
                        <table class="table ">
                          <thead>
                                <th>Id</th>
                                <th>Name</th>                        
                                <th>Genre</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Modify</th>
                                <th>Remove</th>
                          </thead>
                            <?php if(!empty($Games) && is_array($Games) ): ?>
                            <?php foreach($Games as $name): ?>
                                        <tr>
                                                <td>
                                                      <a href="<?=site_url('info/').$name['ID']?>"><?= $name['ID'] ?></a>    
                                                </td>
                                                <td>
                                                     <?=$name['name'] ?>   
                                                </td>
                                                <td>
                                                <?=$name['genre'] ?>    
                                                </td>
                                                <td>
                                                <?=$name['price'] ?>  
                                                </td>
                                                <td>
                                                <?=$name['description'] ?>  
                                                </td>
                                                <td><a href="<?= site_url('edit')."/".$name['ID'] ?>">Edit</a> </td>
                                                <td><a href="<?= site_url('delete')."/".$name['ID']?>" onClick="return confirm('Are you sure you want to delete this record?')">Delete</a> </td>
                                        </tr> 
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                </div>
        </div>


</div>