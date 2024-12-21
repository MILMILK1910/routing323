<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;



class ProductController extends Controller
{

    private $products=[
        ['id' => 1, 'name' => 'Laptop',
        'description' => 'Boost your productivity and creativity with Surface Laptop 6 for Business and Microsoft Copilot.¹˒² Get up to two-times
        faster performance³ with the latest Intel® Core™ Ultra processors (series H), 18.5 hours of battery life,⁴ and AI-powered tools to simplify daily tasks—all in a sleek design. Available in your choice of Platinum or Black⁵ and a 13.5 inch or 15 inch anti-reflective touchscreen display.',
        'price' => 1500,
        'image' => 'https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Surface-Laptop-Go-3_OG_Twitter-image?scl=1'
        ],
        ['id' => 2, 'name' => 'Smartphone',
        'description' => 'The iPhone 16 Pro Max features a stunning titanium design, a camera control system, Dolby Vision in 4K at 120 fps, and the A18 Pro chip.',
        'price' => 800,
        'image' => 'https://istyle.bg/media/catalog/product/cache/image/700x700/e9c3970ab036de70892d86c6d221abfe/i/p/iphone_16_pro_white_titanium_pdp_image_position_1__wwen_t_2_2.jpg'
        ],
        ['id' => 3, 'name' => 'Tablet',
        'description' => 'The iPad has been redesigned with vibrant colors and even more versatility than ever before. It features an all-screen design with a 10.9-inch Liquid Retina display and comes in 4 eye-catching colors.
        The iPad is a powerful tool for getting things done, being creative, and staying connected to everything.
        10.9-inch Liquid Retina display
        A14 Bionic chip with 6-core CPU and 4-core GPU
        12MP wide rear camera
        12MP ultra-wide front camera
        Touch ID for secure authentication
        Compatible with Apple Pencil (1st generation)
        iPadOS 16',
        'price' => 500,
        'image' => 'https://store.storeimages.cdn-apple.com/1/as-images.apple.com/is/ipad-10th-gen-finish-select-202212-silver-wificell_FMT_WHH?wid=1280&hei=720&fmt=p-jpg&qlt=80&.v=OVJOVlhQelp3cUxDNnpBK0hFNFYrQUxaUVVtOUhUT0c2NzZRUllPeEJTdzRQQ2tXZ3ZDSy9WeURIRmw3WWY3Tm5PbGt2UVQ5WnBwclo0V2diY3JJckpEVHFLamY1QnZ3MzdXcjF6dVRnQVpuNDBzcjA0aG5jQUJ1UTI2VzJJR1lzMlBsMC91N1N0ZTQydXFXN3Fmb21n&traceId=1'
        ],
        ['id' => 4, 'name' => 'Wireless Earbuds 2.0',
        'description' => ' The True Wireless earbuds feature luxurious materials from the earbuds to the charging case, designed by the renowned designer Jakob Wagner.
        The sound is refined, with deep bass, clear vocals, and sharp treble that isn’t harsh. The soundstage is expansive, with long-decaying reverb and precise instrument placement.
        Control all functions with touch-sensitive controls on the earbuds.Supports wireless charging.',
        'price' => 150,
        'image' => 'https://cdn5.425degree.com/media/catalog/product/cache/856c7e01db8ed9ce5fb9e3481076ac99/e/8/e8_2_black_1000x1000_result_2.jpg'
        ],
        ['id' => 5, 'name' => 'Smartwatch',
        'description' => 'The Apple Watch Series 9 keeps you connected, active, healthy, and safe at all times. It features the "double-tap" gesture, a wonderful way to interact with the Apple Watch,
        along with a brighter display and the ability to locate your iPhone.
        S9 SiP powering the brightest display ever.Dust resistance at IP6X and water resistance up to 50 meters.Fitness app offering a variety of ways to train.
        The "double-tap" gesture for an amazing interaction with your Apple Watch. Emergency SOS allows you to request help with just a press of a button.',
        'price' => 250,
        'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/s10-case-unselect-gallery-1-202409_FMT_WHH?wid=752&hei=720&fmt=p-jpg&qlt=80&.v=1724620929305'
        ],
        ['id' => 6, 'name' => '4K Ultra HD Smart TV',
        'description' => '4K Ultra HD Google TV™ HDMI 2.1 with eARC Dolby Vision™ - cinema-inspired HDRDolby Atmos® - full 360° sound experience
        Smooth Motion - Frame Interpolation Technology Google Assistant Chromecast Built-in',
        'price' => 850,
        'image' => 'https://res.cloudinary.com/sharp-consumer-eu/image/fetch/w_3000,f_auto/https://s3.infra.brandquad.io/accounts-media/SHRP/DAM/origin/de0d3686-4766-11ee-8cfb-8ee861fd9236.jpg'
        ],
        ['id' => 7, 'name' => 'Gaming Console',
        'description' => 'The Nintendo Switch features controllers called Joy-Con, attached on both sides of the console.
        You can play in vertical, horizontal, or hold one controller in each hand for a variety of gaming experiences.
        Connection between Nintendo Switch:You can bring up to 8 Nintendo Switch and Nintendo Switch Lite consoles close together to connect via Local Wireless Communication.
        Enjoy games like Super Smash Bros. Ultimate or Splatoon 2, both in battle mode or cooperative mode.',
        'price' => 600,
        'image' => 'https://media.education.studio7thailand.com/70617/Nintendo-Switch-H-Oled-Console-White-1-square_medium.jpg'
        ],
        ['id' => 8, 'name' => 'Bluetooth Speaker',
        'description' => 'Carry the loudest Bluetooth speaker for both indoor and outdoor use in your hand, offering over 20 hours of portable playback time,
        allowing you to enjoy music all day long, no matter where you are. With a strong and durable build, it’s designed to withstand the elements. You can also connect multiple
        Bluetooth speakers effortlessly to enhance your listening experience, simply pair them and play your music wirelessly or through a wired connection without any hassle.',
        'price' => 140,
        'image' => 'https://www.istudio.store/cdn/shop/files/marshall_middleton_-_black_and_brass-2.webp?v=1713344530&width=823'
        ],
        ['id' => 9, 'name' => 'External SSD 1TB',
        'description' => 'The 1TB External SSD offers Read Speed: 1,050 MB/s
        Write Speed: 1,000 MB/s Connectivity: USB 3.2 / USB Type-C, compatible with a wide range of devices.
        Durability: Shock-resistant from drops of up to 3 meters and dust- and water-resistant according to IP65 standards.
        Protection: X-ray and impact-resistant, making it ideal for carrying in any situation.
        Warranty: 5-year warranty, ensuring quality and durability.',
        'price' => 180,
        'image' => 'https://storage.googleapis.com/file-computeandmore/images/7f508e2a-3d46-4d83-bfbe-81724734c63f.webp'
        ],
        ['id' => 10, 'name' => 'Noise Cancelling Headphones',
        'description' => 'The best noise-cancelling headphones will completely elevate your audio experience, delivering immersive sound anywhere.
        Whether you’re commuting, working in a noisy office or flying long-distance, these headphones act as a barrier between you and unwanted extraenous noise.',
        'price' => 300,
        'image' => 'https://www.moon-audio.com/cdn/shop/files/sony-wh-1000xm5-main-02__79373.1669671666.1280.1280.jpg?v=1719253283'
        ],
        ['id' => 11, 'name' => 'Digital Camera',
        'description' => 'The Fujifilm X100 VI is the sixth model in the X100 series, maintaining the same compact design as its predecessors.
        It features built-in image stabilization (IBIS) and offers 20 Film Simulation modes, including the new REALACE ACE mode that provides realistic colors with a tone similar to negative film.
        It is equipped with a 40.2 MP X-Trans CMOS 5 HR sensor and powered by the X-Processor 5. The camera comes with a 23mm F2 lens, and its ISO range spans from 125 to 12,800,
        with extended options from 64 to 51,200.Additional features include Wi-Fi 5 and Bluetooth 4.2 connectivity, and it uses the NP-W126S battery.
        The body dimensions are 12.8 x 7.47 x 5.3 cm, and it weighs 521g (including the battery). The X100 VI is available in two colors: Black and Silver.',
        'price' => 700,
        'image' => 'https://www.zoomcamera.net/wp-content/uploads/2024/02/X100%E2%85%A5_NANAME_right_Silver-scaled.jpg'
        ],
        ['id' => 12, 'name' => 'Smart Home Hub',
        'description' => 'The XIAOMI Smart Home Hub is an intelligent gateway that connects with smart devices via Wi-Fi, ZigBee,
        and Bluetooth protocols. It uses 2x2 MIMO wireless technology, offering faster and stronger signals with greater coverage, capable of transmitting signals up to 200 meters.
        It supports three types of networks: ZigBee, Wi-Fi, and Bluetooth, including Bluetooth Mesh, and serves as the central connection hub for controlling Mijia devices within the home.
        Even if the internet disconnects, the hub operates seamlessly, allowing automatic adjustments to the environment without any issues.',
        'price' => 250,
        'image' => 'https://mediam.dotlife.store/media/catalog/product/cache/3b7e899159f673788675d87d1d929a98/x/i/xiaomi_smart_home_hub_6934177710872_.001.jpeg'
        ],
        ['id' => 13, 'name' => 'Drone',
        'description' => 'A brushless 3-axis gimbal and Sony CMOS sensor that can shoot 4K / 30 fps videos and 12MP photos,
        provides a tilt range of +20 °to -90°. Perfectly level shots, no matter how much you tilt. The ATOM features a new algorithm that is able to recognize the moving subject,
        and follow or orbit your subject with great ease.',
        'price' => 420,
        'image' => 'https://store.potensic.com/cdn/shop/files/Drone_ATOM_SE_4K.jpg?v=1715331620&width=1214'
        ],
    ];



    /**
     * Display a listing of the resource.
     * การดึงข้อมูลจากฐานข้อมูลไปยังหน้าเว็บผ่าน inertia โดยการน render
     */
    public function index()
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * ใช้ในการค้นหน้า product ที่มี id ที่มีid ที่ตรงกับ $id หากไม่พบ prd จะส่งกลับไปหน้า error 404 หากพบprd จะไปสู่หน้า product/show เพื่อแสดงรายละเอียดprd
     */
    public function show(string $id)
    {
        $products = collect($this->products)->firstWhere('id',$id);

        if(!$products){
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/Show', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
