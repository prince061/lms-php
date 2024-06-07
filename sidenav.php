   <!-- Sidebar -->
   <div class="col-lg-3 col-md-4">
            <div class="s_Sidebar_one">
                <div class="content">
                <div class="pb-30">
                    <h4 class="mb-20 s_Sidebar_title_one s_bar">Categories</h4>
                    <div class="d-flex justify-content-between align-items-center pb-12">
                    <div class="s_Sidebar_checkbox_one">
                        <input class="form-check-input" type="radio" value="all" name="sub_category" id="allcategory" onclick="filter(this)"  />
                        <label class="form-check-label" for="allcategory">All category</label>
                    </div>
                    <span class="no">(8)</span>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="kids" id="category-1" onclick="filter(this)" checked/>
                                <label class="form-check-label" for="category-1">Kids</label>
                            </div>
                            <span class="no">(1)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="science-fiction-amp-fantasy" id="category-2" onclick="filter(this)" />
                                <label class="form-check-label" for="category-2">Science Fiction &amp; Fantasy</label>
                            </div>
                            <span class="no">(2)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="politics" id="category-8" onclick="filter(this)" />
                                <label class="form-check-label" for="category-8">Politics</label>
                            </div>
                            <span class="no">(1)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="cooking-amp-foods" id="category-10" onclick="filter(this)" />
                                <label class="form-check-label" for="category-10">Cooking &amp; Foods</label>
                            </div>
                            <span class="no">(0)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="motivation" id="category-11" onclick="filter(this)" />
                                <label class="form-check-label" for="category-11">Motivation</label>
                            </div>
                            <span class="no">(0)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="freelancing-amp-outsourcing" id="category-12" onclick="filter(this)" />
                                <label class="form-check-label" for="category-12">Freelancing &amp; Outsourcing</label>
                            </div>
                            <span class="no">(0)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="programming-language" id="category-13" onclick="filter(this)" />
                                <label class="form-check-label" for="category-13">Programming Language</label>
                            </div>
                            <span class="no">(1)</span>
                        </div>
                    </div>
                                        <div class="pb-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="s_Sidebar_checkbox_one">
                                <input class="form-check-input categories" name="sub_category" type="radio" value="education" id="category-14" onclick="filter(this)" />
                                <label class="form-check-label" for="category-14">Education</label>
                            </div>
                            <span class="no">(3)</span>
                        </div>
                    </div>
                                        
                    <a href="javascript:;" class="text-13px fw-500" id="city-toggle-btn" onclick="showToggle(this, 'hidden-categories')"></a>
                </div>
                <div class="pb-30">
                    <h4 class="mb-20 s_Sidebar_title_one s_bar">Price</h4>
                    <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input prices" type="radio" id="price_all" name="price" value="all" onclick="filter(this)" checked/>
                        <label class="form-check-label" for="price_all">All</label>
                    </div>
                    <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input prices" type="radio" id="price_free" name="price" value="free" onclick="filter(this)"  />
                        <label class="form-check-label" for="price_free">Free</label>
                    </div>
                    <div class="s_Sidebar_checkbox_one">
                        <input class="form-check-input prices" id="price_paid" name="price" type="radio" value="paid" onclick="filter(this)" />
                        <label class="form-check-label" for="price_paid">Paid</label>
                    </div>
                </div>
                <div>
                    <h4 class="mb-20 s_Sidebar_title_one s_bar">Ratings</h4>
                    <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" type="radio" id="all_rating" name="rating" value="all" onclick="filter(this)" checked/>
                        <label class="form-check-label" for="rAll">All</label>
                    </div>
                                        <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" id="rating_1" name="rating" type="radio" value="1" onclick="filter(this)" />
                        <label class="form-check-label" for="rating_1">
                            <div class="rating-icon">
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                            </div>
                        </label>
                    </div>
                                        <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" id="rating_2" name="rating" type="radio" value="2" onclick="filter(this)" />
                        <label class="form-check-label" for="rating_2">
                            <div class="rating-icon">
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                            </div>
                        </label>
                    </div>
                                        <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" id="rating_3" name="rating" type="radio" value="3" onclick="filter(this)" />
                        <label class="form-check-label" for="rating_3">
                            <div class="rating-icon">
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                            </div>
                        </label>
                    </div>
                                        <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" id="rating_4" name="rating" type="radio" value="4" onclick="filter(this)" />
                        <label class="form-check-label" for="rating_4">
                            <div class="rating-icon">
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid-2.svg" alt="" />
                                                            </div>
                        </label>
                    </div>
                                        <div class="s_Sidebar_checkbox_one pb-12">
                        <input class="form-check-input ratings" id="rating_5" name="rating" type="radio" value="5" onclick="filter(this)" />
                        <label class="form-check-label" for="rating_5">
                            <div class="rating-icon">
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                    <img loading="lazy" src="assets/frontend/default-new/image/icon/star-solid.svg" alt="" />
                                                                                            </div>
                        </label>
                    </div>
                                        
                </div>
                </div>
            </div>
        </div>
        <!-- Course list -->