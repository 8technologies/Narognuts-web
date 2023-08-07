

 <!-- TO DO List -->
  @extends('layouts.app')
  @section('content')
      
        
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="ion ion-clipboard mr-1"></i>
        To Do List
      </h3>

      <div class="card-tools">
        <ul class="pagination pagination-sm">
          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ul class="todo-list" data-widget="todo-list">
        <li>
          <!-- drag handle -->
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <!-- checkbox -->
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo1" id="todoCheck1">
            <label for="todoCheck1"></label>
          </div>
          <!-- todo text -->
          <span class="text">Weeding overdue</span>
          <!-- Emphasis label -->
          <small class="badge badge-danger"><i class="far fa-clock"></i> 2 weeks</small>
          <!-- General tools such as edit or delete-->
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
            <label for="todoCheck2"></label>
          </div>
          <span class="text">next prroning</span>
          <small class="badge badge-info"><i class="far fa-clock"></i> 4 weeks</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo3" id="todoCheck3">
            <label for="todoCheck3"></label>
          </div>
          <span class="text">Next watering</span>
          <small class="badge badge-warning"><i class="far fa-clock"></i> 6 hours</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo4" id="todoCheck4">
            <label for="todoCheck4"></label>
          </div>
          <span class="text">Watering successful</span>
          <small class="badge badge-success"><i class="far fa-clock"></i> 3 mins</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo5" id="todoCheck5">
            <label for="todoCheck5"></label>
          </div>
          <span class="text">Check your messages and notifications</span>
          <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo6" id="todoCheck6">
            <label for="todoCheck6"></label>
          </div>
          <span class="text">Harvesting period in </span>
          <small class="badge badge-secondary"><i class="far fa-clock"></i>  9 weeks</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
    </div>
  </div>
  @endsection