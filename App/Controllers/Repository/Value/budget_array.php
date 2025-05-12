<?php
// For Credit / Budget Categorization with Emojis

$spendings_type = array(
    "Essentials / Needs" => array(
        "Housing" => array("🏠 Rent", "🏡 Mortgage", "🔧 Property maintenance"),
        "Utilities" => array("💡 Electricity", "🚿 Water", "🔥 Gas", "🌐 Internet/Wi-Fi", "📱 Phone plan"),
        "Groceries" => array("🛒 Food", "🍳 Cooking ingredients", "🧽 Household supplies"),
        "Transportation" => array("⛽ Fuel", "🚌 Public transport", "🚖 Ride-hailing", "🛠️ Vehicle maintenance"),
        "Health & Insurance" => array( "🦷 Doctor/dentist visits", "💊 Medicine", "🏥 Health insurance", "🧬 Life Insurance")
    ),

    "Personal Expenses" => array(
        "Personal Care" => array("🧼 Toiletries", "💇 Haircuts", "💅 Salon/barbershop"),
        "Clothing" => array("👕 Daily wear", "👟 Shoes", "🧥 Seasonal/outdoor clothing"),
        "Entertainment" => array("📺 Subscriptions", "🎨 Hobbies", "🎞️ Movies", "🎮 Games","📲 Apps & in-game purchases"),
        "Dining Out" => array("🍽️ Restaurants", "☕ Cafes", "🌮 Street food"),
        "Education" => array("🎓 Tuition", "📚 Books", "💻 Online courses")
    ),

    "Financial Goals & Obligations" => array(
        "Savings" => array("💰 Emergency fund", "🏖️ Retirement fund", "📈 Investment deposits"),
        "Debt Repayment" => array("💳 Credit card", "🧾 Loans"),
        "Charity / Donations" => array("🙏 Religious offerings", "🎁 Foundations or crowdfunding"),
        "Gifts & Celebrations" => array("🎂 Birthdays", "💒 Weddings", "🎄 Holiday presents")
    ),

    "Digital & Miscellaneous" => array(
        "Digital Services" => array("☁️ Cloud storage", "🌐 Domains & hosting", ),
        "Pets" => array("🐾 Food", "🩺 Vet care", "✂️ Grooming"),
        "Miscellaneous" => array("🅿️ Parking", "💥 Unexpected costs", "💸 Tips")
    )
);

$incomes_type = array(
    "Primary Income" => array(
        "Salary / Wages" => array("💼 Monthly Salary", "📅 Weekly Wages", "🎉 Bonus", "🕒 Overtime Pay"),
        "Freelance / Side Jobs" => array("🧑‍💻 Freelance Projects", "🛵 Gig Work (e.g., Gojek/Grab)", "🧑‍🍳 Part-Time Work")
    ),

    "Business & Self-Employment" => array(
        "Product Sales" => array("🛍️ Online Shop", "🏪 Offline Retail", "🧵 Handmade Products"),
        "Service Income" => array("🧰 Consulting", "📖 Teaching / Tutoring", "🔧 Repair / Maintenance Services")
    ),

    "Investments" => array(
        "Dividends" => array("📊 Stocks", "💹 Mutual Funds"),
        "Capital Gains" => array("💵 Stock Profits", "🪙 Crypto Profits"),
        "Interest" => array("🏦 Bank Savings", "🤝 P2P Lending", "📄 Deposits")
    ),

    "Passive Income" => array(
        "Rentals" => array("🏘️ Property Rent", "🚗 Vehicle / Equipment Rent"),
        "Royalties" => array("📚 Books", "🎶 Music", "🖼️ Digital Products")
    ),

    "Other Income" => array(
        "Gifts / Angpao" => array("🎁 Birthday", "🧧 Holiday", "💝 Wedding"),
        "Government Support" => array("🏛️ BLT", "🫂 Social Aid", "📉 Unemployment Support"),
        "Scholarships / Grants" => array("🎓 Tuition Aid", "🔬 Research Grant"),
        "Reimbursements" => array("💼 Work Expenses", "🔄 Product Returns"),
        "Selling Items (Personal)" => array("📦 Used Items", "🛒 Marketplace Sales"),
        "Other" => array("❓ Uncategorized", "🕊️ One-time income")
    )
);
?>
