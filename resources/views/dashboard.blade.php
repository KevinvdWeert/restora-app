<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h2 style="font-weight: 600; font-size: 1.25rem; color: white; line-height: 1.25; margin: 0;">
                {{ __('Dashboard') }}
            </h2>
            <div style="display: flex; gap: 8px; align-items: center;">
                <span style="font-size: 12px; color: #666; text-transform: uppercase; letter-spacing: 0.5px;">{{ now()->format('l, F j') }}</span>
            </div>
        </div>
    </x-slot>

    <div style="background: #0a0a0a; min-height: 100vh; padding: 40px 20px;">
        <div style="max-width: 1400px; margin: 0 auto;">
            <!-- Welcome Banner -->
            <div style="background: linear-gradient(135deg, #f53003 0%, #c42a02 100%); border-radius: 16px; padding: 48px; margin-bottom: 40px; position: relative; overflow: hidden; box-shadow: 0 8px 32px rgba(245, 48, 3, 0.15);">
                <div style="position: relative; z-index: 1;">
                    <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 20px;">
                        <div>
                            <h2 style="font-size: 36px; font-weight: 700; margin: 0 0 12px 0; color: white;">Welcome back, {{ Auth::user()->name }}! 👋</h2>
                            <p style="font-size: 18px; color: rgba(255,255,255,0.9); margin: 0;">Here's what's happening with your restaurant today.</p>
                        </div>
                        <div style="display: flex; gap: 16px;">
                            <a href="#" style="padding: 12px 24px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); border-radius: 8px; color: white; text-decoration: none; font-weight: 500; backdrop-filter: blur(10px); transition: all 0.3s;" onmouseover="this.style.background='rgba(255,255,255,0.3)'" onmouseout="this.style.background='rgba(255,255,255,0.2)'">
                                + New Reservation
                            </a>
                        </div>
                    </div>
                </div>
                <div style="position: absolute; top: 0; right: 0; width: 400px; height: 100%; background: radial-gradient(circle at 100% 0%, rgba(255,255,255,0.15) 0%, transparent 60%);"></div>
                <div style="position: absolute; bottom: -50px; right: -50px; width: 200px; height: 200px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%); border-radius: 50%;"></div>
            </div>

            <!-- Stats Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 40px;">
                <!-- Stat Card 1 -->
                <div style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 32px; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#f53003'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(245, 48, 3, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                        <div style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            📅
                        </div>
                        <span style="font-size: 12px; color: #666; padding: 4px 12px; background: #1a1a1a; border-radius: 20px; border: 1px solid #222;">TODAY</span>
                    </div>
                    <p style="color: #888; margin: 0 0 8px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; font-weight: 500;">Reservations</p>
                    <p style="font-size: 42px; font-weight: 800; margin: 0 0 12px 0; background: linear-gradient(135deg, #fff 0%, #999 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">0</p>
                    <p style="color: #666; margin: 0; font-size: 14px;">No reservations yet</p>
                </div>

                <!-- Stat Card 2 -->
                <div style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 32px; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#22c55e'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(34, 197, 94, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                        <div style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(34, 197, 94, 0.15) 0%, rgba(34, 197, 94, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            🪑
                        </div>
                        <span style="font-size: 12px; color: #666; padding: 4px 12px; background: #1a1a1a; border-radius: 20px; border: 1px solid #222;">LIVE</span>
                    </div>
                    <p style="color: #888; margin: 0 0 8px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; font-weight: 500;">Active Tables</p>
                    <p style="font-size: 42px; font-weight: 800; margin: 0 0 12px 0; background: linear-gradient(135deg, #fff 0%, #999 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">0</p>
                    <p style="color: #666; margin: 0; font-size: 14px;">All tables available</p>
                </div>

                <!-- Stat Card 3 -->
                <div style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 32px; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#f97316'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(249, 115, 22, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                        <div style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(249, 115, 22, 0.15) 0%, rgba(249, 115, 22, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            📋
                        </div>
                        <span style="font-size: 12px; color: #666; padding: 4px 12px; background: #1a1a1a; border-radius: 20px; border: 1px solid #222;">PENDING</span>
                    </div>
                    <p style="color: #888; margin: 0 0 8px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; font-weight: 500;">Orders</p>
                    <p style="font-size: 42px; font-weight: 800; margin: 0 0 12px 0; background: linear-gradient(135deg, #fff 0%, #999 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">0</p>
                    <p style="color: #666; margin: 0; font-size: 14px;">No pending orders</p>
                </div>

                <!-- Stat Card 4 -->
                <div style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 32px; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#a855f7'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(168, 85, 247, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
                        <div style="width: 56px; height: 56px; background: linear-gradient(135deg, rgba(168, 85, 247, 0.15) 0%, rgba(168, 85, 247, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 28px;">
                            💰
                        </div>
                        <span style="font-size: 12px; color: #666; padding: 4px 12px; background: #1a1a1a; border-radius: 20px; border: 1px solid #222;">TODAY</span>
                    </div>
                    <p style="color: #888; margin: 0 0 8px 0; font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; font-weight: 500;">Revenue</p>
                    <p style="font-size: 42px; font-weight: 800; margin: 0 0 12px 0; background: linear-gradient(135deg, #fff 0%, #999 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">€0</p>
                    <p style="color: #666; margin: 0; font-size: 14px;">Start of the day</p>
                </div>
            </div>

            <!-- Quick Actions Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 40px;">
                <!-- Action Card 1 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#f53003'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(245, 48, 3, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(245, 48, 3, 0.15) 0%, rgba(245, 48, 3, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        🍽️
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Restaurants</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">Manage your restaurant locations and settings</p>
                    <div style="margin-top: 16px; color: #f53003; font-size: 14px; font-weight: 500;">Manage →</div>
                </a>

                <!-- Action Card 2 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#3b82f6'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(59, 130, 246, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(59, 130, 246, 0.15) 0%, rgba(59, 130, 246, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        📅
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Reservations</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">View and manage customer reservations</p>
                    <div style="margin-top: 16px; color: #3b82f6; font-size: 14px; font-weight: 500;">View All →</div>
                </a>

                <!-- Action Card 3 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#22c55e'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(34, 197, 94, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(34, 197, 94, 0.15) 0%, rgba(34, 197, 94, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        🪑
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Tables</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">Configure table layouts and availability</p>
                    <div style="margin-top: 16px; color: #22c55e; font-size: 14px; font-weight: 500;">Configure →</div>
                </a>

                <!-- Action Card 4 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#f97316'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(249, 115, 22, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(249, 115, 22, 0.15) 0%, rgba(249, 115, 22, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        📋
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Orders</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">Track and process customer orders</p>
                    <div style="margin-top: 16px; color: #f97316; font-size: 14px; font-weight: 500;">Manage →</div>
                </a>

                <!-- Action Card 5 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#a855f7'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(168, 85, 247, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(168, 85, 247, 0.15) 0%, rgba(168, 85, 247, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        📖
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Menu</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">Update menu items and categories</p>
                    <div style="margin-top: 16px; color: #a855f7; font-size: 14px; font-weight: 500;">Edit Menu →</div>
                </a>

                <!-- Action Card 6 -->
                <a href="#" style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 28px; text-decoration: none; color: white; transition: all 0.3s; display: block;" onmouseover="this.style.borderColor='#eab308'; this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 24px rgba(234, 179, 8, 0.1)'" onmouseout="this.style.borderColor='#222'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, rgba(234, 179, 8, 0.15) 0%, rgba(234, 179, 8, 0.05) 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; margin-bottom: 20px;">
                        ⭐
                    </div>
                    <h3 style="font-size: 18px; font-weight: 600; margin: 0 0 8px 0;">Reviews</h3>
                    <p style="color: #666; margin: 0; font-size: 14px; line-height: 1.6;">Monitor customer feedback and ratings</p>
                    <div style="margin-top: 16px; color: #eab308; font-size: 14px; font-weight: 500;">View Reviews →</div>
                </a>
            </div>

            <!-- Recent Activity -->
            <div style="background: linear-gradient(135deg, #141414 0%, #1a1a1a 100%); border: 1px solid #222; border-radius: 14px; padding: 40px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 32px;">
                    <h3 style="font-size: 22px; font-weight: 700; margin: 0; display: flex; align-items: center; gap: 10px;">
                        🕐 Recent Activity
                    </h3>
                    <span style="font-size: 12px; color: #666; padding: 6px 16px; background: #0a0a0a; border-radius: 20px; border: 1px solid #222; text-transform: uppercase; letter-spacing: 0.5px;">LIVE</span>
                </div>
                <div style="text-align: center; padding: 80px 20px;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, rgba(100, 100, 100, 0.1) 0%, rgba(50, 50, 50, 0.05) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 36px;">
                        📋
                    </div>
                    <p style="color: #999; font-size: 20px; margin: 0 0 12px 0; font-weight: 500;">No recent activity</p>
                    <p style="color: #555; font-size: 15px; margin: 0; max-width: 400px; margin-left: auto; margin-right: auto; line-height: 1.6;">Activity will appear here once you start managing your restaurant</p>
                </div>
            </div>

            <!-- Footer -->
            <footer style="text-align: center; padding: 40px 0 20px; color: #555; font-size: 14px;">
                <p style="margin: 0;">TableSync &copy; {{ date('Y') }} - Restaurant Management Made Simple</p>
            </footer>
        </div>
    </div>
</x-app-layout>
