(function(){

    var client = // TODO: set your own Algolia credentials here (keys removed for publication)
    var client = algoliasearch('YOUR_ALGOLIA_APP_ID', 'YOUR_ALGOLIA_SEARCH_KEY');
    var index = client.initIndex('items');
//initialize autocomplete on search input (ID selector must match)
    autocomplete('#aa-search-input',
        { hint: false }, {
            source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
            //value to be displayed in input control after user's suggestion selection
            displayKey: 'name',
            //hash of templates used when rendering dataset
            templates: {
                //'suggestion' templating function used to render a single suggestion
                suggestion: function(suggestion) {
                    return '<span>' +
                        suggestion._highlightResult.name.value + '</span>'+
                            `
                            <img src="${window.location.origin}/storage/${suggestion.image}" style="height: 50px;width: 50px">
                            `

                }
            }
        }).on('autocomplete:selected',function (event,suggestion,dataset) {
        window.location.href = window.location.origin +'/categories/'+suggestion.sub_cat_id+'/'+suggestion.slug+'/'+suggestion.id

    });





})();
