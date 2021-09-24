(function () {

    var laroute = (function () {

        var routes = {

            absolute: true,
            rootUrl: 'https://localhost/miabartafrik/website/v2',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/clockwork\/{id}","name":"debugbar.clockwork","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/telescope\/{id}","name":"debugbar.telescope","action":"Barryvdh\Debugbar\Controllers\TelescopeController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"},{"host":null,"methods":["DELETE"],"uri":"_debugbar\/cache\/{key}\/{tags?}","name":"debugbar.cache.delete","action":"Barryvdh\Debugbar\Controllers\CacheController@delete"},{"host":null,"methods":["GET","HEAD"],"uri":"arrilot\/load-widget","name":null,"action":"Arrilot\Widgets\Controllers\WidgetController@showWidget"},{"host":null,"methods":["GET","HEAD"],"uri":"laravel-websockets","name":null,"action":"BeyondCode\LaravelWebSockets\Dashboard\Http\Controllers\ShowDashboard"},{"host":null,"methods":["GET","HEAD"],"uri":"laravel-websockets\/api\/{appId}\/statistics","name":null,"action":"BeyondCode\LaravelWebSockets\Dashboard\Http\Controllers\DashboardApiController@getStatistics"},{"host":null,"methods":["POST"],"uri":"laravel-websockets\/auth","name":null,"action":"BeyondCode\LaravelWebSockets\Dashboard\Http\Controllers\AuthenticateDashboard"},{"host":null,"methods":["POST"],"uri":"laravel-websockets\/event","name":null,"action":"BeyondCode\LaravelWebSockets\Dashboard\Http\Controllers\SendMessage"},{"host":null,"methods":["POST"],"uri":"laravel-websockets\/statistics","name":null,"action":"BeyondCode\LaravelWebSockets\Statistics\Http\Controllers\WebSocketStatisticsEntriesController@store"},{"host":null,"methods":["POST"],"uri":"livewire\/message\/{name}","name":"livewire.message","action":"Livewire\Controllers\HttpConnectionHandler"},{"host":null,"methods":["POST"],"uri":"livewire\/upload-file","name":"livewire.upload-file","action":"Livewire\Controllers\FileUploadHandler@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/preview-file\/{filename}","name":"livewire.preview-file","action":"Livewire\Controllers\FilePreviewHandler@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/livewire.js","name":null,"action":"Livewire\Controllers\LivewireJavaScriptAssets@source"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/livewire.js.map","name":null,"action":"Livewire\Controllers\LivewireJavaScriptAssets@maps"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/mail","name":null,"action":"Laravel\Telescope\Http\Controllers\MailController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/mail\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\MailController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/mail\/{telescopeEntryId}\/preview","name":null,"action":"Laravel\Telescope\Http\Controllers\MailHtmlController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/mail\/{telescopeEntryId}\/download","name":null,"action":"Laravel\Telescope\Http\Controllers\MailEmlController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/exceptions","name":null,"action":"Laravel\Telescope\Http\Controllers\ExceptionController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/exceptions\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ExceptionController@show"},{"host":null,"methods":["PUT"],"uri":"telescope\/telescope-api\/exceptions\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ExceptionController@update"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/dumps","name":null,"action":"Laravel\Telescope\Http\Controllers\DumpController@index"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/logs","name":null,"action":"Laravel\Telescope\Http\Controllers\LogController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/logs\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\LogController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/notifications","name":null,"action":"Laravel\Telescope\Http\Controllers\NotificationsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/notifications\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\NotificationsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/jobs","name":null,"action":"Laravel\Telescope\Http\Controllers\QueueController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/jobs\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\QueueController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/batches","name":null,"action":"Laravel\Telescope\Http\Controllers\QueueBatchesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/batches\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\QueueBatchesController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/events","name":null,"action":"Laravel\Telescope\Http\Controllers\EventsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/events\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\EventsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/gates","name":null,"action":"Laravel\Telescope\Http\Controllers\GatesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/gates\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\GatesController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/cache","name":null,"action":"Laravel\Telescope\Http\Controllers\CacheController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/cache\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\CacheController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/queries","name":null,"action":"Laravel\Telescope\Http\Controllers\QueriesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/queries\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\QueriesController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/models","name":null,"action":"Laravel\Telescope\Http\Controllers\ModelsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/models\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ModelsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/requests","name":null,"action":"Laravel\Telescope\Http\Controllers\RequestsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/requests\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\RequestsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/views","name":null,"action":"Laravel\Telescope\Http\Controllers\ViewsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/views\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ViewsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/commands","name":null,"action":"Laravel\Telescope\Http\Controllers\CommandsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/commands\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\CommandsController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/schedule","name":null,"action":"Laravel\Telescope\Http\Controllers\ScheduleController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/schedule\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ScheduleController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/redis","name":null,"action":"Laravel\Telescope\Http\Controllers\RedisController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/redis\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\RedisController@show"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/client-requests","name":null,"action":"Laravel\Telescope\Http\Controllers\ClientRequestController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/client-requests\/{telescopeEntryId}","name":null,"action":"Laravel\Telescope\Http\Controllers\ClientRequestController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/telescope-api\/monitored-tags","name":null,"action":"Laravel\Telescope\Http\Controllers\MonitoredTagController@index"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/monitored-tags","name":null,"action":"Laravel\Telescope\Http\Controllers\MonitoredTagController@store"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/monitored-tags\/delete","name":null,"action":"Laravel\Telescope\Http\Controllers\MonitoredTagController@destroy"},{"host":null,"methods":["POST"],"uri":"telescope\/telescope-api\/toggle-recording","name":null,"action":"Laravel\Telescope\Http\Controllers\RecordingController@toggle"},{"host":null,"methods":["DELETE"],"uri":"telescope\/telescope-api\/entries","name":null,"action":"Laravel\Telescope\Http\Controllers\EntriesController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"telescope\/{view?}","name":"telescope","action":"Laravel\Telescope\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"broadcasting\/auth","name":null,"action":"\Illuminate\Broadcasting\BroadcastController@authenticate"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/user","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"clear","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"page.index","action":"App\Http\Controllers\PageController@login"},{"host":null,"methods":["GET","HEAD"],"uri":"about","name":"page.about","action":"App\Http\Controllers\PageController@about"},{"host":null,"methods":["GET","HEAD"],"uri":"terms","name":"page.terms","action":"App\Http\Controllers\PageController@terms"},{"host":null,"methods":["GET","HEAD"],"uri":"conditions","name":"page.conditions","action":"App\Http\Controllers\PageController@conditions"},{"host":null,"methods":["GET","HEAD"],"uri":"faq","name":"page.faq","action":"App\Http\Controllers\PageController@faq"},{"host":null,"methods":["GET","HEAD"],"uri":"sitemap","name":"page.sitemap","action":"App\Http\Controllers\PageController@sitemap"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"login","name":"page.login","action":"App\Http\Controllers\PageController@login"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"register","name":"page.register","action":"App\Http\Controllers\PageController@register"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"confirmed","name":"page.confirmed","action":"App\Http\Controllers\PageController@confirmed"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"password\/forgot","name":"page.password_forgot","action":"App\Http\Controllers\PageController@passwordForgot"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"password\/reset\/{email}\/{token}","name":"page.password_reset","action":"App\Http\Controllers\PageController@passwordReset"},{"host":null,"methods":["GET","HEAD"],"uri":"activated\/{email}\/{token}","name":"page.activated","action":"App\Http\Controllers\PageController@activated"},{"host":null,"methods":["GET","HEAD"],"uri":"removed\/account\/{email}\/{token}","name":"page.removed_account","action":"App\Http\Controllers\PageController@removedAccount"},{"host":null,"methods":["GET","HEAD"],"uri":"enabled\/tfa\/{email}\/{token}","name":"page.enabled_tfa","action":"App\Http\Controllers\PageController@enabledTFA"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"completed\/{email}\/{token}","name":"page.completed","action":"App\Http\Controllers\PageController@completed"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"donate","name":"page.donate","action":"App\Http\Controllers\PageController@donate"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"lock\/screen","name":"page.lock_screen","action":"App\Http\Controllers\PageController@lockScreen"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":"page.logout","action":"App\Http\Controllers\PageController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"lock","name":"page.lock","action":"App\Http\Controllers\PageController@lock"},{"host":null,"methods":["GET","HEAD"],"uri":"user","name":"user.index","action":"App\Http\Controllers\UserController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"profile\/{user}\/show","name":"user.show","action":"App\Http\Controllers\UserController@show"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"edit_profile\/{user}\/edit","name":"user.edit","action":"App\Http\Controllers\UserController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"contact","name":"contact.index","action":"App\Http\Controllers\ContactController@index"},{"host":null,"methods":["POST"],"uri":"contact\/store","name":"contact.store","action":"App\Http\Controllers\ContactController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"newsletter","name":"newsletter.index","action":"App\Http\Controllers\NewsletterController@index"},{"host":null,"methods":["POST"],"uri":"newsletter\/store","name":"newsletter.store","action":"App\Http\Controllers\NewsletterController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"newsletter\/unsubscribe\/{email}\/{token}","name":"newsletter.unsubscribe","action":"App\Http\Controllers\NewsletterController@unsubscribe"},{"host":null,"methods":["POST"],"uri":"payement\/callback\/url","name":"payment.callback_url","action":"App\Http\Controllers\PaymentController@callbackURL"},{"host":null,"methods":["GET","HEAD"],"uri":"payement\/return\/url","name":"payment.return_url","action":"App\Http\Controllers\PaymentController@returnURL"},{"host":null,"methods":["GET","HEAD"],"uri":"payement\/cancel\/url","name":"payment.cancel_url","action":"App\Http\Controllers\PaymentController@cancelURL"},{"host":null,"methods":["GET","HEAD"],"uri":"payement\/checkout\/{tableName}","name":"payment.checkout","action":"App\Http\Controllers\PaymentController@checkout"},{"host":null,"methods":["GET","HEAD"],"uri":"settings","name":"settings.index","action":"App\Http\Controllers\SettingsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"settings\/removing\/account","name":"settings.removing_account","action":"App\Http\Controllers\SettingsController@removingAccount"},{"host":null,"methods":["GET","HEAD"],"uri":"settings\/enabling\/tfa","name":"settings.enabling_tfa","action":"App\Http\Controllers\SettingsController@enablingTFA"},{"host":null,"methods":["GET","HEAD"],"uri":"crons\/dbbackup","name":"crons.dbbackup","action":"App\Http\Controllers\CronsController@dbbackup"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast","name":"bookcast.index","action":"App\Http\Controllers\BookCastController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/books","name":"bookcast.books","action":"App\Http\Controllers\BookCastController@books"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/visuoshop","name":"bookcast.visuoshop","action":"App\Http\Controllers\BookCastController@visuoshop"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/networks","name":"bookcast.networks","action":"App\Http\Controllers\BookCastController@networks"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/castings","name":"bookcast.castings","action":"App\Http\Controllers\BookCastController@castings"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/notebook","name":"bookcast.notebook","action":"App\Http\Controllers\BookCastController@notebook"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/elections","name":"bookcast.elections","action":"App\Http\Controllers\BookCastController@elections"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/movies","name":"bookcast.movies","action":"App\Http\Controllers\BookCastController@movies"},{"host":null,"methods":["GET","HEAD"],"uri":"bookcast\/news","name":"bookcast.news","action":"App\Http\Controllers\BookCastController@news"},{"host":null,"methods":["GET","HEAD"],"uri":"boutikart","name":"boutikart.index","action":"App\Http\Controllers\BoutikArtController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"bonaddress","name":"bonaddress.index","action":"App\Http\Controllers\BonAddressController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"library","name":"library.index","action":"App\Http\Controllers\LibraryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"library\/show\/{library}","name":"library.show","action":"App\Http\Controllers\LibraryController@show"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"library\/edit\/{library}","name":"library.edit","action":"App\Http\Controllers\LibraryController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"admin","name":"admin.index","action":"App\Http\Controllers\AdminController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/create","name":"admin.create","action":"App\Http\Controllers\AdminController@create"},{"host":null,"methods":["POST"],"uri":"admin","name":"admin.store","action":"App\Http\Controllers\AdminController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/{admin}","name":"admin.show","action":"App\Http\Controllers\AdminController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/{admin}\/edit","name":"admin.edit","action":"App\Http\Controllers\AdminController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/{admin}","name":"admin.update","action":"App\Http\Controllers\AdminController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"member\/package\/{package?}","name":"member.package","action":"App\Http\Controllers\MemberController@package"},{"host":null,"methods":["GET","HEAD"],"uri":"member","name":"member.index","action":"App\Http\Controllers\MemberController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"member\/create","name":"member.create","action":"App\Http\Controllers\MemberController@create"},{"host":null,"methods":["POST"],"uri":"member","name":"member.store","action":"App\Http\Controllers\MemberController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"member\/{member}","name":"member.show","action":"App\Http\Controllers\MemberController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"member\/{member}\/edit","name":"member.edit","action":"App\Http\Controllers\MemberController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"member\/{member}","name":"member.update","action":"App\Http\Controllers\MemberController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"artist\/package\/{package?}","name":"artist.package","action":"App\Http\Controllers\ArtistController@package"},{"host":null,"methods":["GET","HEAD"],"uri":"artist","name":"artist.index","action":"App\Http\Controllers\ArtistController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"artist\/create","name":"artist.create","action":"App\Http\Controllers\ArtistController@create"},{"host":null,"methods":["POST"],"uri":"artist","name":"artist.store","action":"App\Http\Controllers\ArtistController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"artist\/{artist}","name":"artist.show","action":"App\Http\Controllers\ArtistController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"artist\/{artist}\/edit","name":"artist.edit","action":"App\Http\Controllers\ArtistController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"artist\/{artist}","name":"artist.update","action":"App\Http\Controllers\ArtistController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"partner\/package\/{package?}","name":"partner.package","action":"App\Http\Controllers\PartnerController@package"},{"host":null,"methods":["GET","HEAD"],"uri":"partner","name":"partner.index","action":"App\Http\Controllers\PartnerController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"partner\/create","name":"partner.create","action":"App\Http\Controllers\PartnerController@create"},{"host":null,"methods":["POST"],"uri":"partner","name":"partner.store","action":"App\Http\Controllers\PartnerController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"partner\/{partner}","name":"partner.show","action":"App\Http\Controllers\PartnerController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"partner\/{partner}\/edit","name":"partner.edit","action":"App\Http\Controllers\PartnerController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"partner\/{partner}","name":"partner.update","action":"App\Http\Controllers\PartnerController@update"},{"host":null,"methods":["POST"],"uri":"photographer\/ray","name":"photographer.ray","action":"App\Http\Controllers\PhotographerController@ray"},{"host":null,"methods":["GET","HEAD"],"uri":"photographer\/package\/{package?}","name":"photographer.package","action":"App\Http\Controllers\PhotographerController@package"},{"host":null,"methods":["GET","HEAD"],"uri":"photographer","name":"photographer.index","action":"App\Http\Controllers\PhotographerController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"photographer\/create","name":"photographer.create","action":"App\Http\Controllers\PhotographerController@create"},{"host":null,"methods":["POST"],"uri":"photographer","name":"photographer.store","action":"App\Http\Controllers\PhotographerController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"photographer\/{photographer}","name":"photographer.show","action":"App\Http\Controllers\PhotographerController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"photographer\/{photographer}\/edit","name":"photographer.edit","action":"App\Http\Controllers\PhotographerController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"photographer\/{photographer}","name":"photographer.update","action":"App\Http\Controllers\PhotographerController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"message","name":"message.index","action":"App\Http\Controllers\MessageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"message\/{message}\/show","name":"message.show","action":"App\Http\Controllers\MessageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"notification","name":"notification.index","action":"App\Http\Controllers\NotificationController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"notification\/{notification}\/show","name":"notification.show","action":"App\Http\Controllers\NotificationController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"election\/{election}\/show","name":"election.show","action":"App\Http\Controllers\ElectionController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"casting\/{casting}\/show","name":"casting.show","action":"App\Http\Controllers\CastingController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"event\/{event}\/show","name":"event.show","action":"App\Http\Controllers\EventController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"movie\/{movie}\/show","name":"movie.show","action":"App\Http\Controllers\MovieController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"news\/{item}\/show","name":"news.show","action":"App\Http\Controllers\NewsController@show"},{"host":null,"methods":["POST"],"uri":"publication\/store","name":"publication.store","action":"App\Http\Controllers\PublicationController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"publication\/messages","name":"publication.messages","action":"App\Http\Controllers\PublicationController@messages"},{"host":null,"methods":["GET","HEAD"],"uri":"publication\/user\/messages","name":"publication.user_messages","action":"App\Http\Controllers\PublicationController@userMessages"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

