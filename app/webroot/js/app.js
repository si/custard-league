(function($){
    
    // Limit Pool Game Winner to selected Players
    $('#PoolGamePlayer1').on('change', function(){
        console.log('Player 1 is ' + $(this).val());
    });

    $('.user-scroll input').on('change',function(){
      $(this).closest('fieldset').find('label').removeClass('is-selected');
      $(this).parent('label').addClass('is-selected');
    });
    
})(window.jQuery);



// Class to represent a product
function DartGame() {

    var self = this;
    self.start = 301;
    self.scores = ko.observableArray([]);

}

// Overall viewmodel for this screen, along with initial state
function DartGameViewModel() {

    var self = this;
    
    // Editable data
    self.products = ko.observableArray([
        new Product("ASOS mini skirt with peplum frill hem","skirt.jpg","Pink","UK 8", 35, 1),
        new Product("Camden chunky lace up black heeled boot","boot.jpg","Black","UK 6", 60, 1)
    ]);
    
    self.remaining = ko.computed(function() {
      var total = self.start;
      for(i=0, i<=self.scores().length, i++) {
        total -= self.scores()[i];
      }
      return total;
    });

    // Operations
    self.applyScore = function() {
      self.scores.push(new Product(item,'',colour,size,1 + Math.random()*100, 1));
    }
    self.removeProduct = function(product) { 
      self.products.remove(product) 
    }
    
}

var dartVM = new DartGameViewModel();
ko.applyBindings(dartVM, document.getElementById('DartGame'));



