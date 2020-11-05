<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          
        
        <div class="">
      
        @foreach ($carruseles->shuffle() as $item)
        <img class="mySlides w3-animate-fading modal-body" src="{{asset($item->url_imagen)}}" style="width:100%;  max-height: 450px;">
      
         @endforeach
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary " data-dismiss="modal" id="gratis"  ><span id="countdown"></span></button>
         <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>