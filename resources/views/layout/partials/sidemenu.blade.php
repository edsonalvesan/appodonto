


<li>
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li> 


                    
     
     @if($modulo == 'cadastro') 
     <li class="treeview active"> 
     @else
     <li class="treeview">
     @endif       
     
        <a href="#"><i class="glyphicon glyphicon-book"></i>
                <span>Cadastro Base</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                @if($selectItem == 'clinicas') 
                <li class="active">
                @else
                <li> 
                @endif
                 <a href="{{ route('clinicas') }}">
                    <i class="fa fa-angle-double-right"></i> Clinicas</a>
                </li>
                    
                @if($selectItem == 'pacientes') 
                <li class="active">
                @else
                <li> 
                @endif
                        <a href="{{ route('pacientes') }}">       
                            <i class="fa fa-angle-double-right"></i>  Pacientes</a>
      
                        </li>     
                        
                        </ul>
                    </li>


     <li> 
            <a href="{{ route('orcamentos') }}"><i class="glyphicon glyphicon-folder-open"></i>
                <span>Orçamentos</span>               
            </a>
        </li> 