@extends('layouts.app')

@section('content')

    @include('includes.navbar')


    <section class="section-plans-header">
        <h2 class="heading-secondary">To start listening, just pick a plan</h2>
    </section>


    <section class="plans">
        

        <p class="plans__heading-secondary">Recommended</p>
        <!-- Zamijeniti ovaj arrow -->
        <p class="plans__arrow">&darr;</p>

        <div class="card-container">
            <div class="card">
                <h1 class="card__heading-primary">Deezer Free</h1>
                <h1 class="card__heading-secondary">0,00€</h1>
                <h2 class="card__heading-secondary--light">/month</h2>
                <div class="card__item u-margin-top-small">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">Shuffle</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text">6 profiles</p>
                </div>
                <div class="btn-center u-margin-top-medium u-margin-bottom-medium">
                    <a href="/register" class="btn btn__primary--grey btn-center">Sign up</a>
                </div>
            </div>

            <div class="card card--blue">
                <h1 class="card__heading-primary">Deezer Premium</h1>
                <h1 class="card__heading-secondary">6,99€</h1>
                <h2 class="card__heading-secondary--light">/month</h2>
                <div class="card__item u-margin-top-small">
                    <div class="card__item-icon card__item-icon--white">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text card__item-text--white bold">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon card__item-icon--white">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text card__item-text--white bold">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon card__item-icon--white">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text card__item-text--white bold">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon card__item-icon--white">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text card__item-text--white bold">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon card__item-icon--white">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" height="16" width="16">
                           <g>
                              <path d="M7.6,121.4c0.8,0.8,1.8,1.2,2.9,1.2s2.1-0.4,2.9-1.2l51.1-51.1l51.1,51.1c0.8,0.8,1.8,1.2,2.9,1.2c1,0,2.1-0.4,2.9-1.2   c1.6-1.6,1.6-4.2,0-5.8L70.3,64.5l51.1-51.1c1.6-1.6,1.6-4.2,0-5.8s-4.2-1.6-5.8,0L64.5,58.7L13.4,7.6C11.8,6,9.2,6,7.6,7.6   s-1.6,4.2,0,5.8l51.1,51.1L7.6,115.6C6,117.2,6,119.8,7.6,121.4z"/>
                           </g>
                        </svg>
                    </div>
                    <p class="card__item-text card__item-text--white">6 profiles</p>
                </div>
                <p class="card__desc u-margin-top-medium bold">30 days free</p>
                <div class="btn-center u-margin-top-medium u-margin-bottom-medium">
                    <a href="/register" class="btn btn__primary--red">Try Deezer Premium</a>
                </div>
                <a href="/premium" class="card__link card__link--white u-margin-bottom-medium">More info</a>
            </div>
            <div class="card">
                <h1 class="card__heading-primary">Deezer Family</h1>
                <h1 class="card__heading-secondary">10,49€</h1>
                <h2 class="card__heading-secondary--light">/month</h2>
                <div class="card__item u-margin-top-small">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">56 million tracks</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">No ads</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">Get unlimited skips</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">Offline Mode</p>
                </div>
                <div class="card__item">
                    <div class="card__item-icon">
                        <svg class="svg-icon svg-icon-check" focusable="false" height="16" width="16" viewBox="0 0 12 12" aria-hidden="true"><path d="M.833 5.333a.487.487 0 0 0-.69.688l3.79 3.785.345.344 7.578-7.568a.487.487 0 0 0-.689-.688l-6.889 6.88L.833 5.333z"></path></svg>
                    </div>
                    <p class="card__item-text bold">6 profiles</p>
                </div>
                
                
                <div class="btn-center u-margin-top-medium u-margin-bottom-medium">
                    <a href="/register" class="btn btn__primary--orange">Subscribe</a>
                </div>
                <a href="/premium/family" class="card__link">More info</a>
            </div>
        </div>

        <p class="plans__disclaimer u-margin-top-big">Deezer Premium, 30 days free: cannot be comined with any other offer. Valid one time only for 30 days. This offer is non-binding. You may cancel your subsription at any time.</p>

        <div class="subplans">
            <div class="subplan">
                <div class="u-flex-container u-flex-center u-width-max">
                    <div class="subplan__text">
                        <h2 class="subplan__heading">Annual Plan</h2>
                        <p class="subplan__desc">Get a year of Deezer Premium for 69,90 € instead of 83,88 €</p>
                    </div>
                    <a href="/subplan" class="btn btn__secondary--dark btn-parent-bg">Subscribe</a>    
                </div>
                
            </div>
            <div class="subplan">
                <div class="u-flex-container u-flex-center u-width-max">
                    <div class="subplan__text">
                        <h2 class="subplan__heading">Deezer HiFi</h2>
                        <p class="subplan__desc">Stream in lossless quality for 13,99 €/month</p>
                    </div>
                    <a href="/subplan" class="btn btn__secondary--dark btn-parent-bg">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-gift-card u-margin-top-medium">
        <h2 class="heading-secondary">Give the gift of unlimited music</h2>
        <h3 class="heading-tertiary heading-tertiary--light">
            What could be better than 3, 6 or 12 months of unlimited music?
        </h3>
        <div class="btn-center u-margin-top-small">
            <a href="/giftcard" class="btn btn__primary--red">Get a gift card</a>
        </div>
        <div class="heading-tertiary--light u-margin-top-small">Have a Deezer gift card? <a href="/giftcard/activate" class="heading-tertiary--link">Activate it here</a></div>

        <img src="img/giftcard.png" alt="Deezer giftcard" class="section-gift-card__img u-margin-top-medium">
    </section>





    @include('includes.footer')


@endsection