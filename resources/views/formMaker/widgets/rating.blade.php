<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset, label { margin: 0; padding: 0; }
    body{ margin: 20px; }
    h1 { font-size: 1.5em; margin: 10px; }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
</style>
<div class="col-6">
    <h1 for="">{{ $fiels['slug'] }}</h1>
    <fieldset class="rating" id="{{ $fiels['name'] }}">
        <input type="radio" id="star5" name="{{ $fiels['name'] }}" value="5" @if($value == 5) checked @endif /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
        <input type="radio" id="star4half" name="{{ $fiels['name'] }}" value="4.5" @if($value == 4.5) checked @endif /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
        <input type="radio" id="star4" name="{{ $fiels['name'] }}" value="4" @if($value == 4) checked @endif /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
        <input type="radio" id="star3half" name="{{ $fiels['name'] }}" value="3.5" @if($value == 3.5) checked @endif /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
        <input type="radio" id="star3" name="{{ $fiels['name'] }}" value="3" @if($value == 3) checked @endif /><label class = "full" for="star3" title="Meh - 3 stars"></label>
        <input type="radio" id="star2half" name="{{ $fiels['name'] }}" value="2.5" @if($value == 2.5) checked @endif /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
        <input type="radio" id="star2" name="{{ $fiels['name'] }}" value="2" @if($value == 2) checked @endif /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
        <input type="radio" id="star1half" name="{{ $fiels['name'] }}" value="1.5" @if($value == 1.5) checked @endif /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
        <input type="radio" id="star1" name="{{ $fiels['name'] }}" value="1" @if($value == 1) checked @endif /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
        <input type="radio" id="starhalf" name="{{ $fiels['name'] }}" value="0.5" @if($value == 0.5) checked @endif /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
    </fieldset>
</div>