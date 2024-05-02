<x-header-layout>
    <div class="row my-5 container-xl px-0 mx-auto">
        <div class="container-fluid d-flex gap=2">
            <div class="d-flex align-items-center gap-4 col-12">
                <img
                    src="/assets/pfp.jpg"
                    alt="Profile Picture"
                    class="img-thumbnail rounded-circle col-6"
                    style="max-width: 300px"
                />
                <div class="d-flex flex-column gap-3">
                    <span class="fw-bold fs-2">{{ $user->name }}</span>
                    <div class="d-flex justify-content-start gap-4">
                        <span>2 Posts</span>
                        <span>10 Likes</span>
                        <span>4 Comments</span>
                    </div>
                    <div class="d-flex justify-content-start gap-4">
                        <a href="#" class="btn btn-secondary"
                            >Message</a
                        >
                        <a href="#" class="btn btn-info">Add Friend</a>
                        <a href="#" class="btn btn-warning">New Post</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="card">
                <div class="row g-2">
                    <div class="col-md-7">
                        <img
                            src="assets/sp1.jpg"
                            alt="Post Image"
                            class="card-img-top img-fluid md-rounded-top"
                        />

                        <div class="container-fluid">
                            <div
                                class="d-flex align-items-center my-2 gap-2 justify-content-between container-fluid p-0"
                            >
                                <div
                                    class="d-flex align-items-center gap-2 col-4"
                                >
                                    <img
                                        src="/assets/pfp.jpg"
                                        alt="Profile Picture"
                                        class="img-thumbnail rounded-circle"
                                        style="width: 50px"
                                    />
                                    <span class="fw-semibold"
                                        >OutDoorExplorer</span
                                    >
                                </div>

                                <div
                                    class="container-fluid d-flex justify-content-end gap-4 p-0"
                                >
                                    <div
                                        class="d-flex align-items-center gap-2"
                                    >
                                        <span
                                            ><i
                                                class="bi bi-heart-fill text-danger"
                                            ></i
                                        ></span>
                                        <span class="d-none d-md-inline"
                                            >5 Likes</span
                                        >
                                    </div>
                                    <div
                                        class="d-flex align-items-center gap-2"
                                    >
                                        <span
                                            ><i
                                                class="bi bi-chat-right-dots text-primary"
                                            ></i
                                        ></span>
                                        <span class="d-none d-md-inline"
                                            >2 Comments</span
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid mt-3">
                                <p class="m-0 pb-3">
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Ipsa
                                    aperiam atque officia, voluptatum
                                    similique perferendis pariatur, ea
                                    unde saepe, porro tenetur officiis.
                                    Voluptatum quos repellat aliquid
                                    accusantium porro? Eaque ullam
                                    placeat fuga fugiat omnis dolore
                                    commodi natus nisi itaque sit!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card-body">
                            <span class="fw-semibold mb-2"
                                >Comments</span
                            >
                            <div class="container-fluid p-0 mt-3">
                                <div class="container-fluid px-0 pb-4">
                                    <div
                                        class="d-flex justify-content-between"
                                    >
                                        <div
                                            class="d-flex align-items-center gap-2"
                                        >
                                            <div
                                                class="ratio ratio-1x1"
                                                style="width: 50px"
                                            >
                                                <img
                                                    src="/assets/pfp2.jpg"
                                                    alt="Profile Picture"
                                                    class="img-thumbnail rounded-circle object-fit-cover"
                                                />
                                            </div>
                                            <span class="fw-semibold"
                                                >Zebra</span
                                            >
                                        </div>

                                        <div
                                            class="d-flex align-items-center gap-2"
                                        >
                                            <span
                                                ><i
                                                    class="bi bi-heart-fill text-danger"
                                                ></i
                                            ></span>
                                            <span class=""
                                                >2 Likes</span
                                            >
                                        </div>
                                    </div>

                                    <div class="container-fluid mt-2">
                                        <p class="m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing
                                            elit. Ipsa aperiam atque
                                            officia, voluptatum
                                            similique perferendis
                                            pariatur, ea unde saepe,
                                            porro tenetur officiis.
                                            Voluptatum quos repellat
                                            aliquid accusantium porro?
                                            Eaque ullam placeat fuga
                                            fugiat omnis dolore commodi
                                            natus nisi itaque sit!
                                        </p>
                                    </div>
                                </div>
                                <div class="container-fluid px-0 pb-4">
                                    <div
                                        class="d-flex justify-content-between"
                                    >
                                        <div
                                            class="d-flex align-items-center gap-2"
                                        >
                                            <div
                                                class="ratio ratio-1x1"
                                                style="width: 50px"
                                            >
                                                <img
                                                    src="/assets/pfp3.jpg"
                                                    alt="Profile Picture"
                                                    class="img-thumbnail rounded-circle object-fit-cover"
                                                />
                                            </div>
                                            <span class="fw-semibold"
                                                >CityPics</span
                                            >
                                        </div>

                                        <div
                                            class="d-flex align-items-center gap-2"
                                        >
                                            <span
                                                ><i
                                                    class="bi bi-heart-fill text-danger"
                                                ></i
                                            ></span>
                                            <span class="">1 Like</span>
                                        </div>
                                    </div>

                                    <div class="container-fluid mt-2">
                                        <p class="m-0">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing
                                            elit. Ipsa aperiam atque
                                            officia, voluptatum
                                            similique perferendis
                                            pariatur, ea unde saepe,
                                            porro tenetur officiis.
                                            Voluptatum quos repellat
                                            aliquid accusantium porro?
                                            Eaque ullam placeat fuga
                                            fugiat omnis dolore commodi
                                            natus nisi itaque sit!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-header-layout>