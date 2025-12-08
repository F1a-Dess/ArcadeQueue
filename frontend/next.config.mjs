/** @type {import('next').NextConfig} */
const nextConfig = {
  // output: 'export',
  // output: 'standalone',
  reactStrictMode: true,
  images: {
    unoptimized: true,
  },
  trailingSlash: true,
};

export default nextConfig;
