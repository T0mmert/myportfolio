<x-app-layout>
    <div style="background-color: #020617; min-height: 100vh; color: white; position: relative;">
        
        <div id="space-scene" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;"></div>

        <div style="position: relative; z-index: 10;">
            
            <section style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 0 1rem;">
                <div style="max-width: 72rem; margin: 0 auto; width: 100%; text-align: center; position: relative;">
                    
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.5rem 1rem; border-radius: 9999px; background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2); color: #60a5fa; font-size: 0.875rem; margin-bottom: 2rem;">
                        <span style="width: 0.5rem; height: 0.5rem; background: #3b82f6; border-radius: 50%; animation: pulse 2s infinite;"></span>
                        Full Stack Developer
                    </div>

                    <h1 style="font-size: 4rem; font-weight: 700; line-height: 1.1; margin-bottom: 1.5rem; color: white; text-shadow: 0 0 30px rgba(59,130,246,0.5);">
                        <span style="display: block;">Tom Versteeg</span>
                        <span style="display: block; background: linear-gradient(to right, #60a5fa, #818cf8, #a78bfa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-top: 0.5rem;">
                            Portfolio
                        </span>
                    </h1>

                    <p style="font-size: 1.25rem; color: rgba(191, 219, 254, 0.6); max-width: 36rem; margin: 0 auto 2rem auto;">
                        Welcome!
                    </p>

                    <div style="display: flex; gap: 1rem; justify-content: center;">
                        <a href="#projects" style="padding: 1rem 2rem; background: #2563eb; color: white; border-radius: 9999px; font-weight: 600; text-decoration: none; transition: all 0.3s; box-shadow: 0 0 20px rgba(37,99,235,0.5);" onmouseover="this.style.background='#3b82f6'; this.style.transform='scale(1.05)'" onmouseout="this.style.background='#2563eb'; this.style.transform='scale(1)'">
                            Explore Work
                        </a>
                        <a href="{{ route('contact') }}" style="padding: 1rem 2rem; background: transparent; color: #93bbfc; border: 1px solid rgba(59, 130, 246, 0.3); border-radius: 9999px; font-weight: 600; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.background='transparent'">
                            Contact
                        </a>
                    </div>
                </div>
            </section>

            <section style="padding: 4rem 1rem; position: relative;">
                <div style="max-width: 80rem; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    
                    <div style="padding: 2rem; border-radius: 1.5rem; background: rgba(30, 58, 138, 0.2); border: 1px solid rgba(59, 130, 246, 0.2); backdrop-filter: blur(10px); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(96, 165, 250, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(59, 130, 246, 0.2)'">
                        <div style="width: 3rem; height: 3rem; border-radius: 1rem; background: linear-gradient(to bottom right, #3b82f6, #4f46e5); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem; color: white;">Web devlopment</h3>
                        <p style="color: rgba(191, 219, 254, 0.6); line-height: 1.6;">Scalable backend architectures with clean code.</p>
                    </div>

                    <div style="padding: 2rem; border-radius: 1.5rem; background: rgba(30, 58, 138, 0.2); border: 1px solid rgba(59, 130, 246, 0.2); backdrop-filter: blur(10px); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(139, 92, 246, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(59, 130, 246, 0.2)'">
                        <div style="width: 3rem; height: 3rem; border-radius: 1rem; background: linear-gradient(to bottom right, #6366f1, #a855f7); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem; color: white;">Game development</h3>
                        <p style="color: rgba(191, 219, 254, 0.6); line-height: 1.6;">fully functional python game.</p>
                    </div>

                    <div style="padding: 2rem; border-radius: 1.5rem; background: rgba(30, 58, 138, 0.2); border: 1px solid rgba(59, 130, 246, 0.2); backdrop-filter: blur(10px); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(168, 85, 247, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(59, 130, 246, 0.2)'">
                        <div style="width: 3rem; height: 3rem; border-radius: 1rem; background: linear-gradient(to bottom right, #a855f7, #ec4899); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg style="width: 1.5rem; height: 1.5rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem; color: white;">Secure Deploy</h3>
                        <p style="color: rgba(191, 219, 254, 0.6); line-height: 1.6;">CI/CD pipelines with automated testing.</p>
                    </div>
                </div>
            </section>

            <section style="padding: 6rem 1rem; color: white;">
                <div style="max-width: 72rem; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">About Me</h2>
                        <div style="width: 5rem; height: 0.25rem; background: linear-gradient(to right, #3b82f6, #8b5cf6); margin: 0 auto;"></div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                        <div>
                            <p style="font-size: 1.125rem; line-height: 1.8; color: #94a3b8; margin-bottom: 1.5rem;">
                                I am a 20 year old software developer student at Landstede Harderwijk. I love working on code and solving puzzles.
                                Also im eager to learn everything, from languages, tools, hardware and software. 
                            </p>
                            <p style="font-size: 1.125rem; line-height: 1.8; color: #94a3b8; margin-bottom: 1.5rem;">
                               I have been studying software development for close to two years now.
                               Languages i speak flutently are dutch and english.

                            </p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <span style="background: rgba(59, 130, 246, 0.2); color: #60a5fa; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.875rem;">Puzzle Solver</span>
                                <span style="background: rgba(139, 92, 246, 0.2); color: #a78bfa; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.875rem;">Clean Code</span>
                                <span style="background: rgba(236, 72, 153, 0.2); color: #f472b6; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.875rem;">Always Learning</span>
                            </div>
                        </div>
                        <div style="background: rgba(30, 58, 138, 0.2); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2rem;">
                            <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem; color: #60a5fa;">Quick Facts</h3>
                            <ul style="color: #94a3b8; list-style: none; padding: 0;">
                                <li style="margin-bottom: 0.75rem;">🎓 Software Development Student</li>
                                <li style="margin-bottom: 0.75rem;">💻 Web development</li>
                                <li style="margin-bottom: 0.75rem;">🚀 Game development</li>
                                <li style="margin-bottom: 0.75rem;">🌍 Based in Netherlands </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" style="padding: 6rem 1rem; color: white;">
                <div style="max-width: 80rem; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <h2 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 1rem;">My Projects</h2>
                        <div style="width: 5rem; height: 0.25rem; background: linear-gradient(to right, #3b82f6, #8b5cf6); margin: 0 auto;"></div>
                        <p style="color: #94a3b8; margin-top: 1rem;">A selection of my works</p>
                    </div>

                    @if(isset($projects) && $projects->count() > 0)
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                            @foreach($projects as $project)
                                <div style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; overflow: hidden; transition: all 0.3s;" 
                                     onmouseover="this.style.transform='translateY(-8px)'; this.style.borderColor='rgba(59, 130, 246, 0.5)'" 
                                     onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(59, 130, 246, 0.2)'">
                                    
                                    @if($project->image)
                                        <img src="{{ asset($project->image) }}" style="width: 100%; height: 200px; object-fit: cover;">                                    @else
                                        <div style="width: 100%; height: 200px; background: linear-gradient(to right, #1e3a8a, #312e81); display: flex; align-items: center; justify-content: center;">
                                            <span style="color: #64748b;">No Image</span>
                                        </div>
                                    @endif

                                    <div style="padding: 1.5rem;">
                                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.75rem;">
                                            <h3 style="font-size: 1.25rem; font-weight: 700; color: white;">{{ $project->title }}</h3>
                                            @if($project->is_featured)
                                                <span style="background: linear-gradient(to right, #fbbf24, #f59e0b); color: #000; font-size: 0.75rem; padding: 0.25rem 0.5rem; border-radius: 9999px;">Featured</span>
                                            @endif
                                        </div>
                                        
                                        <p style="color: #94a3b8; font-size: 0.875rem; line-height: 1.6; margin-bottom: 1rem;">
                                            {{ Str::limit($project->description, 150) }}
                                        </p>

                                        <div style="margin-bottom: 1rem;">
                                            <div style="font-size: 0.75rem; color: #60a5fa; margin-bottom: 0.5rem;">Languages:</div>
                                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                                @foreach($project->languages_array as $lang)
                                                    <span style="background: rgba(59, 130, 246, 0.2); color: #60a5fa; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem;">{{ trim($lang) }}</span>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div style="margin-bottom: 1rem;">
                                            <div style="font-size: 0.75rem; color: #a78bfa; margin-bottom: 0.5rem;">Tools:</div>
                                            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                                                @foreach($project->tools_array as $tool)
                                                    <span style="background: rgba(139, 92, 246, 0.2); color: #a78bfa; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem;">{{ trim($tool) }}</span>
                                                @endforeach
                                            </div>
                                        </div>

                                        @if($project->link)
                                            <a href="{{ $project->link }}" target="_blank" style="display: inline-flex; align-items: center; color: #3b82f6; text-decoration: none; font-size: 0.875rem; font-weight: 500;">
                                                View Project →
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div style="text-align: center; padding: 4rem; color: #64748b;">
                            <p>No projects added yet. Check back soon!</p>
                            @auth
                                @php
                                    $adminEmails = ['your-email@example.com'];
                                @endphp
                                @if(in_array(auth()->user()->email, $adminEmails))
                                    <a href="{{ route('admin.projects.create') }}" style="color: #3b82f6; text-decoration: underline; margin-top: 1rem; display: inline-block;">
                                        Add your first project
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </section>

            <section style="padding: 4rem 1rem; color: white; text-align: center;">
                <div style="max-width: 48rem; margin: 0 auto;">
                    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">Let's Work Together</h2>
                    <p style="color: #94a3b8; margin-bottom: 2rem;">Have a project in mind? I'd love to hear about it.</p>
                    <a href="{{ route('contact') }}" style="display: inline-block; padding: 1rem 2rem; background: linear-gradient(to right, #2563eb, #7c3aed); color: white; border-radius: 9999px; font-weight: 600; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        Get In Touch
                    </a>
                </div>
            </section>
        </div>
    </div>

    <style>
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
    </style>

    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('space-scene');
            
            if (!container) return;
            
            const scene = new THREE.Scene();
            scene.background = new THREE.Color(0x020617);
            
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            function createStarTexture() {
                const canvas = document.createElement('canvas');
                canvas.width = 32;
                canvas.height = 32;
                const context = canvas.getContext('2d');
                
                const gradient = context.createRadialGradient(16, 16, 0, 16, 16, 16);
                gradient.addColorStop(0, 'rgba(255, 255, 255, 1)');
                gradient.addColorStop(0.2, 'rgba(255, 255, 255, 0.8)');
                gradient.addColorStop(0.5, 'rgba(255, 255, 255, 0.2)');
                gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
                
                context.fillStyle = gradient;
                context.fillRect(0, 0, 32, 32);
                
                const texture = new THREE.Texture(canvas);
                texture.needsUpdate = true;
                return texture;
            }

            const starsGeometry = new THREE.BufferGeometry();
            const starsCount = 1500;
            const posArray = new Float32Array(starsCount * 3);
            
            for(let i = 0; i < starsCount * 3; i++) {
                posArray[i] = (Math.random() - 0.5) * 100;
            }
            
            starsGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
            
            const starTexture = createStarTexture();
            const starsMaterial = new THREE.PointsMaterial({
                size: 0.5,
                map: starTexture,
                transparent: true,
                opacity: 0.8,
                blending: THREE.AdditiveBlending,
                depthWrite: false,
                color: 0xa5f3fc
            });
            
            const starField = new THREE.Points(starsGeometry, starsMaterial);
            scene.add(starField);

            const nebulaGeometry = new THREE.BufferGeometry();
            const nebulaCount = 60;
            const nebulaPos = new Float32Array(nebulaCount * 3);
            const nebulaColors = new Float32Array(nebulaCount * 3);
            
            for(let i = 0; i < nebulaCount; i++) {
                const theta = Math.random() * Math.PI * 2;
                const phi = Math.acos(2 * Math.random() - 1);
                const radius = 6 + Math.random() * 8;
                
                nebulaPos[i * 3] = radius * Math.sin(phi) * Math.cos(theta);
                nebulaPos[i * 3 + 1] = radius * Math.sin(phi) * Math.sin(theta);
                nebulaPos[i * 3 + 2] = radius * Math.cos(phi);
                
                const colorMix = Math.random();
                if(colorMix < 0.33) {
                    nebulaColors[i * 3] = 0.6;
                    nebulaColors[i * 3 + 1] = 0.2;
                    nebulaColors[i * 3 + 2] = 0.8;
                } else if(colorMix < 0.66) {
                    nebulaColors[i * 3] = 0.9;
                    nebulaColors[i * 3 + 1] = 0.3;
                    nebulaColors[i * 3 + 2] = 0.6;
                } else {
                    nebulaColors[i * 3] = 0.2;
                    nebulaColors[i * 3 + 1] = 0.4;
                    nebulaColors[i * 3 + 2] = 0.9;
                }
            }
            
            nebulaGeometry.setAttribute('position', new THREE.BufferAttribute(nebulaPos, 3));
            nebulaGeometry.setAttribute('color', new THREE.BufferAttribute(nebulaColors, 3));
            
            const nebulaTexture = createStarTexture();
            const nebulaMaterial = new THREE.PointsMaterial({
                size: 1,
                map: nebulaTexture,
                vertexColors: true,
                transparent: true,
                opacity: 0.3,
                blending: THREE.AdditiveBlending,
                depthWrite: false
            });
            
            const nebula = new THREE.Points(nebulaGeometry, nebulaMaterial);
            scene.add(nebula);

            const sphereGeometry = new THREE.SphereGeometry(2, 64, 64);
            const sphereMaterial = new THREE.MeshPhysicalMaterial({
                color: 0x1e3a8a,
                metalness: 0,
                roughness: 0.2,
                transmission: 0.4,
                thickness: 0,
                emissive: 0x172554,
                emissiveIntensity: 0.3,
                clearcoat: 1,
                clearcoatRoughness: 0.5
            });
            
            const planet = new THREE.Mesh(sphereGeometry, sphereMaterial);
            scene.add(planet);

            const atmoGeometry = new THREE.SphereGeometry(2.2, 64, 64);
            const atmoMaterial = new THREE.MeshBasicMaterial({
                color: 0x3b82f6,
                transparent: true,
                opacity: 0.15,
                side: THREE.BackSide,
                blending: THREE.AdditiveBlending
            });
            const atmosphere = new THREE.Mesh(atmoGeometry, atmoMaterial);
            planet.add(atmosphere);

            const ringGroup = new THREE.Group();
            planet.add(ringGroup);

            const ring1 = new THREE.Mesh(
                new THREE.TorusGeometry(3.5, 0.03, 32, 200),
                new THREE.MeshBasicMaterial({ 
                    color: 0x60a5fa, 
                    transparent: true, 
                    opacity: 0.4,
                    side: THREE.DoubleSide
                })
            );
            ring1.rotation.x = Math.PI / 2;
            ringGroup.add(ring1);

            const ring2 = new THREE.Mesh(
                new THREE.TorusGeometry(4.5, 0.02, 32, 200),
                new THREE.MeshBasicMaterial({ 
                    color: 0x818cf8, 
                    transparent: true, 
                    opacity: 0.25,
                    side: THREE.DoubleSide
                })
            );
            ring2.rotation.x = Math.PI / 3;
            ring2.rotation.y = Math.PI / 6;
            ringGroup.add(ring2);

            const particleRingGeo = new THREE.BufferGeometry();
            const particleCount = 2000;
            const particlePos = new Float32Array(particleCount * 3);
            
            for(let i = 0; i < particleCount; i++) {
                const angle = (i / particleCount) * Math.PI * 2;
                const radius = 5.5 + Math.random() * 0.5;
                particlePos[i * 3] = Math.cos(angle) * radius;
                particlePos[i * 3 + 1] = (Math.random() - 0.5) * 0.2;
                particlePos[i * 3 + 2] = Math.sin(angle) * radius;
            }
            
            particleRingGeo.setAttribute('position', new THREE.BufferAttribute(particlePos, 3));
            const particleRingMat = new THREE.PointsMaterial({
                color: 0xa78bfa,
                size: 0.15,
                map: starTexture,
                transparent: true,
                opacity: 0.6,
                blending: THREE.AdditiveBlending
            });
            const particleRing = new THREE.Points(particleRingGeo, particleRingMat);
            particleRing.rotation.x = Math.PI / 2.5;
            ringGroup.add(particleRing);

            const ambientLight = new THREE.AmbientLight(0x1e3a8a, 0.4);
            scene.add(ambientLight);

            const mainLight = new THREE.DirectionalLight(0x60a5fa, 1);
            mainLight.position.set(5, 5, 5);
            scene.add(mainLight);

            const rimLight = new THREE.DirectionalLight(0xa78bfa, 0.5);
            rimLight.position.set(-5, -5, -5);
            scene.add(rimLight);

            const nebulaLight = new THREE.PointLight(0xa855f7, 0.8, 20);
            nebulaLight.position.set(8, 5, 5);
            scene.add(nebulaLight);

            camera.position.z = 12;

            const clock = new THREE.Clock();

            function animate() {
                requestAnimationFrame(animate);
                const elapsed = clock.getElapsedTime();

                starField.rotation.y = elapsed * 0.02;
                nebula.rotation.y = elapsed * 0.01;
                nebula.rotation.z = elapsed * 0.005;
                planet.rotation.y += 0.002;
                ring1.rotation.z += 0.005;
                ring2.rotation.z -= 0.003;
                particleRing.rotation.z += 0.002;
                planet.position.y = Math.sin(elapsed * 0.5) * 0.2;
                nebulaMaterial.opacity = 0.3 + Math.sin(elapsed * 0.5) * 0.1;

                renderer.render(scene, camera);
            }

            animate();

            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
        });
    </script>
    @endpush
</x-app-layout>