    @extends('layouts.bootstrap.app')
    @section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="mt-2" style="height: 80%;"  src="/images/logo.png" alt="" srcset=""></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </nav>
  
      <section class="main mt-5">
        <div>
          <h1><strong>Find your perfect plan</strong></h1>
        </div>
        {{-- <div class="currency mt-5">
          <div class="m_currency">
            <div class="price active">USD</div>
            <div class="price">GBP</div>
            <div class="price">EUR</div>
          </div>
        </div> --}}
        <div class="side_image">
          <img
            src="data:image/png;base64,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"
            class="pricing__currencyPlansCross1__G3ISh"
            alt="cross"
          />
        </div>
      </section>
  
  
      {{-- start Dynamic --}}
  
      <section class="pricing mt-5">
          <div class="mx-5">
            <div class="row">
                @foreach ($pricings as $price)
                <div class="col-lg-3 col-md-6 pricing_column p-4">
                  <h3><strong>{{$price->name}}</strong></h3>
                  <p style="color: #828388;"><i>Starting at</i></p>
                  @if ($price->subscription_fee_monthly)
                  <h1><strong class="amount amount_monthly">${{$price->subscription_fee_monthly}}/<span style="font-size: 1.5rem">mo</span></strong></h1>
                  <h1><strong class="amount amount_annual" style="display: none;">${{$price->subscription_fee_annual}}/<span style="font-size: 1.5rem">mo</span></strong></h1>
                  <div class="duration text-center">
                    <div class="duration_item">Annual</div>
                    <div class="duration_item duration_active">Monthly</div>
                  </div> 
                  @else
                  <h1>Free</h1> 
                
                  @endif
                  <div class="info mt-3">
                    <div><strong>Buying Tokens</strong></div>
                    <div class="lead" style="font-size: 1rem">
                     {{$price->buying_tokens}}
                    </div>
                    {{-- <div><strong>$20/screen</strong></div> --}}
                  </div>
                    <div class="info mt-3">
                      <div><strong>Minting Tokens</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->minting_tokens}}
                      </div>
                    </div>
                    <div class="info mt-3">
                      <div><strong>No. of Token mints per month</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->tokens_mints_per_month}}
                      </div>
                    </div>
                  
                    @if ($price->edition_per_token)
                    <div class="info mt-3">
                      <div><strong>No. of Editions per Token</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->edition_per_token}}
                      </div>
                    </div> 
                    @endif
                   
                  
                    @if ($price->marketplace)
                    <div class="info mt-3">
                      <div><strong>Marketplace</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->marketplace}}
                      </div>
                    </div>  
                    @endif
  
                    @if ($price->wallet)
                    <div class="info mt-3">
                      <div><strong>Wallet</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->wallet}}
                      </div>
                    </div>  
                    @endif
                   
  
                    @if ($price->gomint_sales_commission)
                    <div class="info mt-3">
                      <div><strong>GoMint Sales Commission</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->gomint_sales_commission}}
                      </div>
                    </div>  
                    @endif
                   
  
                    @if ($price->gomint_purchase_commission)
                    <div class="info mt-3">
                      <div><strong>GoMint Purchase Commission</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->gomint_purchase_commission}}
                      </div>
                    </div>
                    @endif
                    
                    @if ($price->royalties_on_future_sales)
                    <div class="info mt-3">
                      <div><strong>Royalties on future sales</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->royalties_on_future_sales}}
                      </div>
                    </div> 
                    @endif
  
                  @if ($price->gas_fee)
                  <div class="info mt-3">
                      <div><strong>Transaction Processing 'gas' fees</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->gas_fees}}
                      </div>
                    </div> 
                  @endif
  
                  @if ($price->email_marketing)
                  <div class="info mt-3">
                      <div><strong>Email marketing</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->email_marketing}}
                      </div>
                    </div> 
                  @endif  
                  
  
                   @if ($price->analytics_dashboard)
                   <div class="info mt-3">
                      <div><strong>Analytics Dashboard</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->analytics_dashboard}}
                      </div>
                    </div>  
                   @endif
  
                  @if ($price->support)
                  <div class="info mt-3">
                      <div><strong>Support</strong></div>
                      <div class="lead" style="font-size: 1rem">
                       {{$price->support}}
                      </div>
                    </div>
                  @endif
                  
  
                  {{-- <div class="features">
                    <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li> 
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access </li>
                    </ul>
                  </div> --}}
                  <div class="pricing_footer">
                      
                  
                    @if (!$price->subscription_fee_monthly)
                    <button type="button" class="mt-3">Join For Free</button>
                    @else
                    <div class="lead text-center mt-4" style="font-size: 1rem">
                      14-day free trial. No credit card required.
                    </div>
                    <button type="button" class="mt-3">Start Free Trial</button>
                    @endif   
                  </div>
                </div>
    
                @endforeach
              
  
  
  
            </div>
          </div>
        </section>
  
  
  
  
        {{-- Dynamic --}}
  
  
  
  
  
      {{-- <section class="pricing mt-5">
        <div class="mx-5">
          <div class="row">
            <div class="col-lg-3 col-md-6 pricing_column p-4">
              <h3><strong>Starter</strong></h3>
              <p>Starting Price</p>
              <h1><strong class="amount">$60/mo</strong></h1>
              <div class="duration text-center">
                <div class="duration_active duration_item">Annual</div>
                <div class="duration_item">Monthly</div>
              </div>
              <div class="info mt-3">
                <div><strong>Includes 3 Screens</strong></div>
                <div class="lead" style="font-size: 1rem">
                  Additional screens are billed at
                </div>
                <div><strong>$20/screen</strong></div>
              </div>
              <div class="features">
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li> 
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access </li>
                </ul>
              </div>
              <div class="pricing_footer">
                <div class="lead text-center" style="font-size: 1rem">
                  14-day free trial. No credit card required.
                </div>
                <button type="button" class="mt-3">Start Free Trial</button>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 pricing_column p-4">
              <h3><strong>Starter</strong></h3>
              <p>Starting Price</p>
              <h1><strong class="amount">$60/mo</strong></h1>
              <div class="duration text-center">
                <div class="duration_active duration_item">Annual</div>
                <div class="duration_item">Monthly</div>
              </div>
              <div class="info mt-3">
                <div><strong>Includes 3 Screens</strong></div>
                <div class="lead" style="font-size: 1rem">
                  Additional screens are billed at
                </div>
                <div><strong>$20/screen</strong></div>
              </div>
              <div class="features">
                  <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li> 
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access </li>
                    </ul>
              </div>
              <div class="pricing_footer">
                <div class="lead text-center" style="font-size: 1rem">
                  14-day free trial. No credit card required.
                </div>
                <button type="button" class="mt-3">Start Free Trial</button>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 pricing_column p-4">
              <h3><strong>Starter</strong></h3>
              <p>Starting Price</p>
              <h1><strong class="amount">$60/mo</strong></h1>
              <div class="duration text-center">
                <div class="duration_active duration_item">Annual</div>
                <div class="duration_item">Monthly</div>
              </div>
              <div class="info mt-3">
                <div><strong>Includes 3 Screens</strong></div>
                <div class="lead" style="font-size: 1rem">
                  Additional screens are billed at
                </div>
                <div><strong>$20/screen</strong></div>
              </div>
              <div class="features">
                  <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li> 
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access </li>
                    </ul>
              </div>
              <div class="pricing_footer">
                <div class="lead text-center" style="font-size: 1rem">
                  14-day free trial. No credit card required.
                </div>
                <button type="button" class="mt-3">Start Free Trial</button>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 pricing_column p-4">
              <h3><strong>Starter</strong></h3>
              <p>Starting Price</p>
              <h1><strong class="amount">$60/mo</strong></h1>
              <div class="duration text-center">
                <div class="duration_active duration_item">Annual</div>
                <div class="duration_item">Monthly</div>
              </div>
              <div class="info mt-3">
                <div><strong>Includes 3 Screens</strong></div>
                <div class="lead" style="font-size: 1rem">
                  Additional screens are billed at
                </div>
                <div><strong>$20/screen</strong></div>
              </div>
              <div class="features">
                  <ul>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access <i class="fa fa-exclamation-circle" aria-hidden="true"></i></li> 
                      <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp;GraphQL API access </li>
                    </ul>
              </div>
              <div class="pricing_footer">
                <div class="lead text-center" style="font-size: 1rem">
                  14-day free trial. No credit card required.
                </div>
                <button type="button" class="mt-3">Start Free Trial</button>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
  
      <section class="educational_discount text-center mt-5 container">
        <div class="row">
          <div class="col-lg-6 educational_discount_text">
            <h1><strong>Educational discount</strong></h1>
            <p>
              We serve a broad range of educational institutions and offer our
              solution at a discount for educational use. Please contact us to
              discuss how ScreenCloud can best support your educational efforts.
            </p>
            <button type="button">Talk to Sales</button>
          </div>
          <div class="col-lg-6">
            <img
              style="max-width: 100%; height: auto"
              class="img-responsive"
              src="https://screencloud.com/_next/static/img/img_discount_educational-2cf9f7a8eb02cf8a68f59bd6c48ec614.png"
              alt=""
            />
          </div>
        </div>
      </section>
  
      <section class="mt-4 payment p-4 text-center">
        <div class="payment_text">
          <h1><strong>Making payment easy</strong></h1>
          <p>
            We happily support US Dollar, British Pound and Euro
            currencies.Payment options are Credit or Debit card, PayPal and Direct
            Deposit (Europe only).
          </p>
        </div>
      </section>
  
      <section class="faq container mb-5 mt-5">
        <h1 class="mb-4"><strong>Frequently asked questions</strong></h1>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div
              class="card-header"
              id="headingOne"
              data-toggle="collapse"
              data-target="#collapseOne"
            >
              <h5>What happens at the end of my free trial?</h5>
            </div>
  
            <div
              id="collapseOne"
              class="collapse"
              aria-labelledby="headingOne"
              data-parent="#accordionExample"
            >
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life
                accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                on it squid single-origin coffee nulla assumenda shoreditch et.
                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them
                accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <footer>
        <div class="container">
          <div class="row p-4 footer_start">
            <div class="col-lg-3 col-sm-6">
              <h4 class="text-white">Main Sectors</h4>
              <ul>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h4 class="text-white">Main Sectors</h4>
              <ul>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h4 class="text-white">Main Sectors</h4>
              <ul>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6">
              <h4 class="text-white">Main Sectors</h4>
              <ul>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
                <li>Retail</li>
              </ul>
            </div>
          </div>
          <div class="row text-center footer_end">
            <div class="col-lg-4 col-sm-4 footer_end_text">
              support@screen.cloud International House, 24 Holborn Viaduct London,
              EC1A 2BN VAT No: GB217 6671 94
            </div>
            <div class="col-lg-4 col-sm-4 footer_end_text">
              UK - ScreenCloud Limited Registration No: 09535144 +44 (0)20 3808
              5585
            </div>
            <div class="col-lg-4 col-sm-4 footer_end_text">
              USA - ScreenCloud Inc Company No: Delaware 5820214 +1 888-557-5328
            </div>
          </div>
          <div class="footer_icon mt-2">
            <div class="row">
              <div class="col-lg-12 text-center mb-4">
                <span><i class="fa fa-facebook social_icon mr-3" aria-hidden="true"></i></span>
                <span><i class="fa fa-twitter social_icon mr-3" aria-hidden="true"></i></span>
                <span><i class="fa fa-instagram social_icon" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
        </div>
      </footer>
    @endsection
      @section('scripts')
      <script>
        $(".duration_item").click(function () {
            $(".duration_item").removeClass("duration_active")
              $(this).addClass("duration_active");
              console.log($(this).parent())
              var annual_amount = $(this).parent().prev().find(".amount_annual")
              var monthly_amount = $(this).parent().prev().prev().find(".amount_monthly")
              if($(this).text().toLowerCase() == 'annual'){
                  annual_amount.css("display" , 'block');
                  monthly_amount.css("display" , 'none');
              }else {
                  annual_amount.css("display" , 'none');
                  monthly_amount.css("display" , 'block');
              }
        });
      </script>
      @endsection
   
   
 
